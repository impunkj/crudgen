<?php namespace Tests\Repositories;

use App\Models\frality;
use App\Repositories\fralityRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class fralityRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var fralityRepository
     */
    protected $fralityRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->fralityRepo = \App::make(fralityRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_frality()
    {
        $frality = frality::factory()->make()->toArray();

        $createdfrality = $this->fralityRepo->create($frality);

        $createdfrality = $createdfrality->toArray();
        $this->assertArrayHasKey('id', $createdfrality);
        $this->assertNotNull($createdfrality['id'], 'Created frality must have id specified');
        $this->assertNotNull(frality::find($createdfrality['id']), 'frality with given id must be in DB');
        $this->assertModelData($frality, $createdfrality);
    }

    /**
     * @test read
     */
    public function test_read_frality()
    {
        $frality = frality::factory()->create();

        $dbfrality = $this->fralityRepo->find($frality->id);

        $dbfrality = $dbfrality->toArray();
        $this->assertModelData($frality->toArray(), $dbfrality);
    }

    /**
     * @test update
     */
    public function test_update_frality()
    {
        $frality = frality::factory()->create();
        $fakefrality = frality::factory()->make()->toArray();

        $updatedfrality = $this->fralityRepo->update($fakefrality, $frality->id);

        $this->assertModelData($fakefrality, $updatedfrality->toArray());
        $dbfrality = $this->fralityRepo->find($frality->id);
        $this->assertModelData($fakefrality, $dbfrality->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_frality()
    {
        $frality = frality::factory()->create();

        $resp = $this->fralityRepo->delete($frality->id);

        $this->assertTrue($resp);
        $this->assertNull(frality::find($frality->id), 'frality should not exist in DB');
    }
}
