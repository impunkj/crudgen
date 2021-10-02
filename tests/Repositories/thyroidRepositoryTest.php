<?php namespace Tests\Repositories;

use App\Models\thyroid;
use App\Repositories\thyroidRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class thyroidRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var thyroidRepository
     */
    protected $thyroidRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->thyroidRepo = \App::make(thyroidRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_thyroid()
    {
        $thyroid = thyroid::factory()->make()->toArray();

        $createdthyroid = $this->thyroidRepo->create($thyroid);

        $createdthyroid = $createdthyroid->toArray();
        $this->assertArrayHasKey('id', $createdthyroid);
        $this->assertNotNull($createdthyroid['id'], 'Created thyroid must have id specified');
        $this->assertNotNull(thyroid::find($createdthyroid['id']), 'thyroid with given id must be in DB');
        $this->assertModelData($thyroid, $createdthyroid);
    }

    /**
     * @test read
     */
    public function test_read_thyroid()
    {
        $thyroid = thyroid::factory()->create();

        $dbthyroid = $this->thyroidRepo->find($thyroid->id);

        $dbthyroid = $dbthyroid->toArray();
        $this->assertModelData($thyroid->toArray(), $dbthyroid);
    }

    /**
     * @test update
     */
    public function test_update_thyroid()
    {
        $thyroid = thyroid::factory()->create();
        $fakethyroid = thyroid::factory()->make()->toArray();

        $updatedthyroid = $this->thyroidRepo->update($fakethyroid, $thyroid->id);

        $this->assertModelData($fakethyroid, $updatedthyroid->toArray());
        $dbthyroid = $this->thyroidRepo->find($thyroid->id);
        $this->assertModelData($fakethyroid, $dbthyroid->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_thyroid()
    {
        $thyroid = thyroid::factory()->create();

        $resp = $this->thyroidRepo->delete($thyroid->id);

        $this->assertTrue($resp);
        $this->assertNull(thyroid::find($thyroid->id), 'thyroid should not exist in DB');
    }
}
