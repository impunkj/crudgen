<?php namespace Tests\Repositories;

use App\Models\renalStones;
use App\Repositories\renalStonesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class renalStonesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var renalStonesRepository
     */
    protected $renalStonesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->renalStonesRepo = \App::make(renalStonesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_renal_stones()
    {
        $renalStones = renalStones::factory()->make()->toArray();

        $createdrenalStones = $this->renalStonesRepo->create($renalStones);

        $createdrenalStones = $createdrenalStones->toArray();
        $this->assertArrayHasKey('id', $createdrenalStones);
        $this->assertNotNull($createdrenalStones['id'], 'Created renalStones must have id specified');
        $this->assertNotNull(renalStones::find($createdrenalStones['id']), 'renalStones with given id must be in DB');
        $this->assertModelData($renalStones, $createdrenalStones);
    }

    /**
     * @test read
     */
    public function test_read_renal_stones()
    {
        $renalStones = renalStones::factory()->create();

        $dbrenalStones = $this->renalStonesRepo->find($renalStones->id);

        $dbrenalStones = $dbrenalStones->toArray();
        $this->assertModelData($renalStones->toArray(), $dbrenalStones);
    }

    /**
     * @test update
     */
    public function test_update_renal_stones()
    {
        $renalStones = renalStones::factory()->create();
        $fakerenalStones = renalStones::factory()->make()->toArray();

        $updatedrenalStones = $this->renalStonesRepo->update($fakerenalStones, $renalStones->id);

        $this->assertModelData($fakerenalStones, $updatedrenalStones->toArray());
        $dbrenalStones = $this->renalStonesRepo->find($renalStones->id);
        $this->assertModelData($fakerenalStones, $dbrenalStones->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_renal_stones()
    {
        $renalStones = renalStones::factory()->create();

        $resp = $this->renalStonesRepo->delete($renalStones->id);

        $this->assertTrue($resp);
        $this->assertNull(renalStones::find($renalStones->id), 'renalStones should not exist in DB');
    }
}
