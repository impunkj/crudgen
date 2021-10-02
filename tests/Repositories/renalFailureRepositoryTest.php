<?php namespace Tests\Repositories;

use App\Models\renalFailure;
use App\Repositories\renalFailureRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class renalFailureRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var renalFailureRepository
     */
    protected $renalFailureRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->renalFailureRepo = \App::make(renalFailureRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_renal_failure()
    {
        $renalFailure = renalFailure::factory()->make()->toArray();

        $createdrenalFailure = $this->renalFailureRepo->create($renalFailure);

        $createdrenalFailure = $createdrenalFailure->toArray();
        $this->assertArrayHasKey('id', $createdrenalFailure);
        $this->assertNotNull($createdrenalFailure['id'], 'Created renalFailure must have id specified');
        $this->assertNotNull(renalFailure::find($createdrenalFailure['id']), 'renalFailure with given id must be in DB');
        $this->assertModelData($renalFailure, $createdrenalFailure);
    }

    /**
     * @test read
     */
    public function test_read_renal_failure()
    {
        $renalFailure = renalFailure::factory()->create();

        $dbrenalFailure = $this->renalFailureRepo->find($renalFailure->id);

        $dbrenalFailure = $dbrenalFailure->toArray();
        $this->assertModelData($renalFailure->toArray(), $dbrenalFailure);
    }

    /**
     * @test update
     */
    public function test_update_renal_failure()
    {
        $renalFailure = renalFailure::factory()->create();
        $fakerenalFailure = renalFailure::factory()->make()->toArray();

        $updatedrenalFailure = $this->renalFailureRepo->update($fakerenalFailure, $renalFailure->id);

        $this->assertModelData($fakerenalFailure, $updatedrenalFailure->toArray());
        $dbrenalFailure = $this->renalFailureRepo->find($renalFailure->id);
        $this->assertModelData($fakerenalFailure, $dbrenalFailure->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_renal_failure()
    {
        $renalFailure = renalFailure::factory()->create();

        $resp = $this->renalFailureRepo->delete($renalFailure->id);

        $this->assertTrue($resp);
        $this->assertNull(renalFailure::find($renalFailure->id), 'renalFailure should not exist in DB');
    }
}
