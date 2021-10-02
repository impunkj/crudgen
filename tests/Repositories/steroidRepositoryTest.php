<?php namespace Tests\Repositories;

use App\Models\steroid;
use App\Repositories\steroidRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class steroidRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var steroidRepository
     */
    protected $steroidRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->steroidRepo = \App::make(steroidRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_steroid()
    {
        $steroid = steroid::factory()->make()->toArray();

        $createdsteroid = $this->steroidRepo->create($steroid);

        $createdsteroid = $createdsteroid->toArray();
        $this->assertArrayHasKey('id', $createdsteroid);
        $this->assertNotNull($createdsteroid['id'], 'Created steroid must have id specified');
        $this->assertNotNull(steroid::find($createdsteroid['id']), 'steroid with given id must be in DB');
        $this->assertModelData($steroid, $createdsteroid);
    }

    /**
     * @test read
     */
    public function test_read_steroid()
    {
        $steroid = steroid::factory()->create();

        $dbsteroid = $this->steroidRepo->find($steroid->id);

        $dbsteroid = $dbsteroid->toArray();
        $this->assertModelData($steroid->toArray(), $dbsteroid);
    }

    /**
     * @test update
     */
    public function test_update_steroid()
    {
        $steroid = steroid::factory()->create();
        $fakesteroid = steroid::factory()->make()->toArray();

        $updatedsteroid = $this->steroidRepo->update($fakesteroid, $steroid->id);

        $this->assertModelData($fakesteroid, $updatedsteroid->toArray());
        $dbsteroid = $this->steroidRepo->find($steroid->id);
        $this->assertModelData($fakesteroid, $dbsteroid->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_steroid()
    {
        $steroid = steroid::factory()->create();

        $resp = $this->steroidRepo->delete($steroid->id);

        $this->assertTrue($resp);
        $this->assertNull(steroid::find($steroid->id), 'steroid should not exist in DB');
    }
}
