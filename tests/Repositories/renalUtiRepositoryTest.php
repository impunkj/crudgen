<?php namespace Tests\Repositories;

use App\Models\renalUti;
use App\Repositories\renalUtiRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class renalUtiRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var renalUtiRepository
     */
    protected $renalUtiRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->renalUtiRepo = \App::make(renalUtiRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_renal_uti()
    {
        $renalUti = renalUti::factory()->make()->toArray();

        $createdrenalUti = $this->renalUtiRepo->create($renalUti);

        $createdrenalUti = $createdrenalUti->toArray();
        $this->assertArrayHasKey('id', $createdrenalUti);
        $this->assertNotNull($createdrenalUti['id'], 'Created renalUti must have id specified');
        $this->assertNotNull(renalUti::find($createdrenalUti['id']), 'renalUti with given id must be in DB');
        $this->assertModelData($renalUti, $createdrenalUti);
    }

    /**
     * @test read
     */
    public function test_read_renal_uti()
    {
        $renalUti = renalUti::factory()->create();

        $dbrenalUti = $this->renalUtiRepo->find($renalUti->id);

        $dbrenalUti = $dbrenalUti->toArray();
        $this->assertModelData($renalUti->toArray(), $dbrenalUti);
    }

    /**
     * @test update
     */
    public function test_update_renal_uti()
    {
        $renalUti = renalUti::factory()->create();
        $fakerenalUti = renalUti::factory()->make()->toArray();

        $updatedrenalUti = $this->renalUtiRepo->update($fakerenalUti, $renalUti->id);

        $this->assertModelData($fakerenalUti, $updatedrenalUti->toArray());
        $dbrenalUti = $this->renalUtiRepo->find($renalUti->id);
        $this->assertModelData($fakerenalUti, $dbrenalUti->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_renal_uti()
    {
        $renalUti = renalUti::factory()->create();

        $resp = $this->renalUtiRepo->delete($renalUti->id);

        $this->assertTrue($resp);
        $this->assertNull(renalUti::find($renalUti->id), 'renalUti should not exist in DB');
    }
}
