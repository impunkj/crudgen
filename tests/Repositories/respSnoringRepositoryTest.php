<?php namespace Tests\Repositories;

use App\Models\respSnoring;
use App\Repositories\respSnoringRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class respSnoringRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var respSnoringRepository
     */
    protected $respSnoringRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->respSnoringRepo = \App::make(respSnoringRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_resp_snoring()
    {
        $respSnoring = respSnoring::factory()->make()->toArray();

        $createdrespSnoring = $this->respSnoringRepo->create($respSnoring);

        $createdrespSnoring = $createdrespSnoring->toArray();
        $this->assertArrayHasKey('id', $createdrespSnoring);
        $this->assertNotNull($createdrespSnoring['id'], 'Created respSnoring must have id specified');
        $this->assertNotNull(respSnoring::find($createdrespSnoring['id']), 'respSnoring with given id must be in DB');
        $this->assertModelData($respSnoring, $createdrespSnoring);
    }

    /**
     * @test read
     */
    public function test_read_resp_snoring()
    {
        $respSnoring = respSnoring::factory()->create();

        $dbrespSnoring = $this->respSnoringRepo->find($respSnoring->id);

        $dbrespSnoring = $dbrespSnoring->toArray();
        $this->assertModelData($respSnoring->toArray(), $dbrespSnoring);
    }

    /**
     * @test update
     */
    public function test_update_resp_snoring()
    {
        $respSnoring = respSnoring::factory()->create();
        $fakerespSnoring = respSnoring::factory()->make()->toArray();

        $updatedrespSnoring = $this->respSnoringRepo->update($fakerespSnoring, $respSnoring->id);

        $this->assertModelData($fakerespSnoring, $updatedrespSnoring->toArray());
        $dbrespSnoring = $this->respSnoringRepo->find($respSnoring->id);
        $this->assertModelData($fakerespSnoring, $dbrespSnoring->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_resp_snoring()
    {
        $respSnoring = respSnoring::factory()->create();

        $resp = $this->respSnoringRepo->delete($respSnoring->id);

        $this->assertTrue($resp);
        $this->assertNull(respSnoring::find($respSnoring->id), 'respSnoring should not exist in DB');
    }
}
