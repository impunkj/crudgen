<?php namespace Tests\Repositories;

use App\Models\cnsCognitive;
use App\Repositories\cnsCognitiveRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class cnsCognitiveRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var cnsCognitiveRepository
     */
    protected $cnsCognitiveRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cnsCognitiveRepo = \App::make(cnsCognitiveRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_cns_cognitive()
    {
        $cnsCognitive = cnsCognitive::factory()->make()->toArray();

        $createdcnsCognitive = $this->cnsCognitiveRepo->create($cnsCognitive);

        $createdcnsCognitive = $createdcnsCognitive->toArray();
        $this->assertArrayHasKey('id', $createdcnsCognitive);
        $this->assertNotNull($createdcnsCognitive['id'], 'Created cnsCognitive must have id specified');
        $this->assertNotNull(cnsCognitive::find($createdcnsCognitive['id']), 'cnsCognitive with given id must be in DB');
        $this->assertModelData($cnsCognitive, $createdcnsCognitive);
    }

    /**
     * @test read
     */
    public function test_read_cns_cognitive()
    {
        $cnsCognitive = cnsCognitive::factory()->create();

        $dbcnsCognitive = $this->cnsCognitiveRepo->find($cnsCognitive->id);

        $dbcnsCognitive = $dbcnsCognitive->toArray();
        $this->assertModelData($cnsCognitive->toArray(), $dbcnsCognitive);
    }

    /**
     * @test update
     */
    public function test_update_cns_cognitive()
    {
        $cnsCognitive = cnsCognitive::factory()->create();
        $fakecnsCognitive = cnsCognitive::factory()->make()->toArray();

        $updatedcnsCognitive = $this->cnsCognitiveRepo->update($fakecnsCognitive, $cnsCognitive->id);

        $this->assertModelData($fakecnsCognitive, $updatedcnsCognitive->toArray());
        $dbcnsCognitive = $this->cnsCognitiveRepo->find($cnsCognitive->id);
        $this->assertModelData($fakecnsCognitive, $dbcnsCognitive->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_cns_cognitive()
    {
        $cnsCognitive = cnsCognitive::factory()->create();

        $resp = $this->cnsCognitiveRepo->delete($cnsCognitive->id);

        $this->assertTrue($resp);
        $this->assertNull(cnsCognitive::find($cnsCognitive->id), 'cnsCognitive should not exist in DB');
    }
}
