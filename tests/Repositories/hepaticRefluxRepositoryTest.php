<?php namespace Tests\Repositories;

use App\Models\hepaticReflux;
use App\Repositories\hepaticRefluxRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class hepaticRefluxRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var hepaticRefluxRepository
     */
    protected $hepaticRefluxRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->hepaticRefluxRepo = \App::make(hepaticRefluxRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_hepatic_reflux()
    {
        $hepaticReflux = hepaticReflux::factory()->make()->toArray();

        $createdhepaticReflux = $this->hepaticRefluxRepo->create($hepaticReflux);

        $createdhepaticReflux = $createdhepaticReflux->toArray();
        $this->assertArrayHasKey('id', $createdhepaticReflux);
        $this->assertNotNull($createdhepaticReflux['id'], 'Created hepaticReflux must have id specified');
        $this->assertNotNull(hepaticReflux::find($createdhepaticReflux['id']), 'hepaticReflux with given id must be in DB');
        $this->assertModelData($hepaticReflux, $createdhepaticReflux);
    }

    /**
     * @test read
     */
    public function test_read_hepatic_reflux()
    {
        $hepaticReflux = hepaticReflux::factory()->create();

        $dbhepaticReflux = $this->hepaticRefluxRepo->find($hepaticReflux->id);

        $dbhepaticReflux = $dbhepaticReflux->toArray();
        $this->assertModelData($hepaticReflux->toArray(), $dbhepaticReflux);
    }

    /**
     * @test update
     */
    public function test_update_hepatic_reflux()
    {
        $hepaticReflux = hepaticReflux::factory()->create();
        $fakehepaticReflux = hepaticReflux::factory()->make()->toArray();

        $updatedhepaticReflux = $this->hepaticRefluxRepo->update($fakehepaticReflux, $hepaticReflux->id);

        $this->assertModelData($fakehepaticReflux, $updatedhepaticReflux->toArray());
        $dbhepaticReflux = $this->hepaticRefluxRepo->find($hepaticReflux->id);
        $this->assertModelData($fakehepaticReflux, $dbhepaticReflux->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_hepatic_reflux()
    {
        $hepaticReflux = hepaticReflux::factory()->create();

        $resp = $this->hepaticRefluxRepo->delete($hepaticReflux->id);

        $this->assertTrue($resp);
        $this->assertNull(hepaticReflux::find($hepaticReflux->id), 'hepaticReflux should not exist in DB');
    }
}
