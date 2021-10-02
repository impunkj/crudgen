<?php namespace Tests\Repositories;

use App\Models\diabetes;
use App\Repositories\diabetesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class diabetesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var diabetesRepository
     */
    protected $diabetesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->diabetesRepo = \App::make(diabetesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_diabetes()
    {
        $diabetes = diabetes::factory()->make()->toArray();

        $createddiabetes = $this->diabetesRepo->create($diabetes);

        $createddiabetes = $createddiabetes->toArray();
        $this->assertArrayHasKey('id', $createddiabetes);
        $this->assertNotNull($createddiabetes['id'], 'Created diabetes must have id specified');
        $this->assertNotNull(diabetes::find($createddiabetes['id']), 'diabetes with given id must be in DB');
        $this->assertModelData($diabetes, $createddiabetes);
    }

    /**
     * @test read
     */
    public function test_read_diabetes()
    {
        $diabetes = diabetes::factory()->create();

        $dbdiabetes = $this->diabetesRepo->find($diabetes->id);

        $dbdiabetes = $dbdiabetes->toArray();
        $this->assertModelData($diabetes->toArray(), $dbdiabetes);
    }

    /**
     * @test update
     */
    public function test_update_diabetes()
    {
        $diabetes = diabetes::factory()->create();
        $fakediabetes = diabetes::factory()->make()->toArray();

        $updateddiabetes = $this->diabetesRepo->update($fakediabetes, $diabetes->id);

        $this->assertModelData($fakediabetes, $updateddiabetes->toArray());
        $dbdiabetes = $this->diabetesRepo->find($diabetes->id);
        $this->assertModelData($fakediabetes, $dbdiabetes->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_diabetes()
    {
        $diabetes = diabetes::factory()->create();

        $resp = $this->diabetesRepo->delete($diabetes->id);

        $this->assertTrue($resp);
        $this->assertNull(diabetes::find($diabetes->id), 'diabetes should not exist in DB');
    }
}
