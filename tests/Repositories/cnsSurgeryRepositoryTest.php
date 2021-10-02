<?php namespace Tests\Repositories;

use App\Models\cnsSurgery;
use App\Repositories\cnsSurgeryRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class cnsSurgeryRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var cnsSurgeryRepository
     */
    protected $cnsSurgeryRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cnsSurgeryRepo = \App::make(cnsSurgeryRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_cns_surgery()
    {
        $cnsSurgery = cnsSurgery::factory()->make()->toArray();

        $createdcnsSurgery = $this->cnsSurgeryRepo->create($cnsSurgery);

        $createdcnsSurgery = $createdcnsSurgery->toArray();
        $this->assertArrayHasKey('id', $createdcnsSurgery);
        $this->assertNotNull($createdcnsSurgery['id'], 'Created cnsSurgery must have id specified');
        $this->assertNotNull(cnsSurgery::find($createdcnsSurgery['id']), 'cnsSurgery with given id must be in DB');
        $this->assertModelData($cnsSurgery, $createdcnsSurgery);
    }

    /**
     * @test read
     */
    public function test_read_cns_surgery()
    {
        $cnsSurgery = cnsSurgery::factory()->create();

        $dbcnsSurgery = $this->cnsSurgeryRepo->find($cnsSurgery->id);

        $dbcnsSurgery = $dbcnsSurgery->toArray();
        $this->assertModelData($cnsSurgery->toArray(), $dbcnsSurgery);
    }

    /**
     * @test update
     */
    public function test_update_cns_surgery()
    {
        $cnsSurgery = cnsSurgery::factory()->create();
        $fakecnsSurgery = cnsSurgery::factory()->make()->toArray();

        $updatedcnsSurgery = $this->cnsSurgeryRepo->update($fakecnsSurgery, $cnsSurgery->id);

        $this->assertModelData($fakecnsSurgery, $updatedcnsSurgery->toArray());
        $dbcnsSurgery = $this->cnsSurgeryRepo->find($cnsSurgery->id);
        $this->assertModelData($fakecnsSurgery, $dbcnsSurgery->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_cns_surgery()
    {
        $cnsSurgery = cnsSurgery::factory()->create();

        $resp = $this->cnsSurgeryRepo->delete($cnsSurgery->id);

        $this->assertTrue($resp);
        $this->assertNull(cnsSurgery::find($cnsSurgery->id), 'cnsSurgery should not exist in DB');
    }
}
