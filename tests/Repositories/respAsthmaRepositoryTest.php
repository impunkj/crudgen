<?php namespace Tests\Repositories;

use App\Models\respAsthma;
use App\Repositories\respAsthmaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class respAsthmaRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var respAsthmaRepository
     */
    protected $respAsthmaRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->respAsthmaRepo = \App::make(respAsthmaRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_resp_asthma()
    {
        $respAsthma = respAsthma::factory()->make()->toArray();

        $createdrespAsthma = $this->respAsthmaRepo->create($respAsthma);

        $createdrespAsthma = $createdrespAsthma->toArray();
        $this->assertArrayHasKey('id', $createdrespAsthma);
        $this->assertNotNull($createdrespAsthma['id'], 'Created respAsthma must have id specified');
        $this->assertNotNull(respAsthma::find($createdrespAsthma['id']), 'respAsthma with given id must be in DB');
        $this->assertModelData($respAsthma, $createdrespAsthma);
    }

    /**
     * @test read
     */
    public function test_read_resp_asthma()
    {
        $respAsthma = respAsthma::factory()->create();

        $dbrespAsthma = $this->respAsthmaRepo->find($respAsthma->id);

        $dbrespAsthma = $dbrespAsthma->toArray();
        $this->assertModelData($respAsthma->toArray(), $dbrespAsthma);
    }

    /**
     * @test update
     */
    public function test_update_resp_asthma()
    {
        $respAsthma = respAsthma::factory()->create();
        $fakerespAsthma = respAsthma::factory()->make()->toArray();

        $updatedrespAsthma = $this->respAsthmaRepo->update($fakerespAsthma, $respAsthma->id);

        $this->assertModelData($fakerespAsthma, $updatedrespAsthma->toArray());
        $dbrespAsthma = $this->respAsthmaRepo->find($respAsthma->id);
        $this->assertModelData($fakerespAsthma, $dbrespAsthma->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_resp_asthma()
    {
        $respAsthma = respAsthma::factory()->create();

        $resp = $this->respAsthmaRepo->delete($respAsthma->id);

        $this->assertTrue($resp);
        $this->assertNull(respAsthma::find($respAsthma->id), 'respAsthma should not exist in DB');
    }
}
