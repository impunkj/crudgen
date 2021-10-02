<?php namespace Tests\Repositories;

use App\Models\respSmoking;
use App\Repositories\respSmokingRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class respSmokingRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var respSmokingRepository
     */
    protected $respSmokingRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->respSmokingRepo = \App::make(respSmokingRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_resp_smoking()
    {
        $respSmoking = respSmoking::factory()->make()->toArray();

        $createdrespSmoking = $this->respSmokingRepo->create($respSmoking);

        $createdrespSmoking = $createdrespSmoking->toArray();
        $this->assertArrayHasKey('id', $createdrespSmoking);
        $this->assertNotNull($createdrespSmoking['id'], 'Created respSmoking must have id specified');
        $this->assertNotNull(respSmoking::find($createdrespSmoking['id']), 'respSmoking with given id must be in DB');
        $this->assertModelData($respSmoking, $createdrespSmoking);
    }

    /**
     * @test read
     */
    public function test_read_resp_smoking()
    {
        $respSmoking = respSmoking::factory()->create();

        $dbrespSmoking = $this->respSmokingRepo->find($respSmoking->id);

        $dbrespSmoking = $dbrespSmoking->toArray();
        $this->assertModelData($respSmoking->toArray(), $dbrespSmoking);
    }

    /**
     * @test update
     */
    public function test_update_resp_smoking()
    {
        $respSmoking = respSmoking::factory()->create();
        $fakerespSmoking = respSmoking::factory()->make()->toArray();

        $updatedrespSmoking = $this->respSmokingRepo->update($fakerespSmoking, $respSmoking->id);

        $this->assertModelData($fakerespSmoking, $updatedrespSmoking->toArray());
        $dbrespSmoking = $this->respSmokingRepo->find($respSmoking->id);
        $this->assertModelData($fakerespSmoking, $dbrespSmoking->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_resp_smoking()
    {
        $respSmoking = respSmoking::factory()->create();

        $resp = $this->respSmokingRepo->delete($respSmoking->id);

        $this->assertTrue($resp);
        $this->assertNull(respSmoking::find($respSmoking->id), 'respSmoking should not exist in DB');
    }
}
