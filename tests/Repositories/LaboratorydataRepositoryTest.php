<?php namespace Tests\Repositories;

use App\Models\Laboratorydata;
use App\Repositories\LaboratorydataRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class LaboratorydataRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var LaboratorydataRepository
     */
    protected $laboratorydataRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->laboratorydataRepo = \App::make(LaboratorydataRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_laboratorydata()
    {
        $laboratorydata = Laboratorydata::factory()->make()->toArray();

        $createdLaboratorydata = $this->laboratorydataRepo->create($laboratorydata);

        $createdLaboratorydata = $createdLaboratorydata->toArray();
        $this->assertArrayHasKey('id', $createdLaboratorydata);
        $this->assertNotNull($createdLaboratorydata['id'], 'Created Laboratorydata must have id specified');
        $this->assertNotNull(Laboratorydata::find($createdLaboratorydata['id']), 'Laboratorydata with given id must be in DB');
        $this->assertModelData($laboratorydata, $createdLaboratorydata);
    }

    /**
     * @test read
     */
    public function test_read_laboratorydata()
    {
        $laboratorydata = Laboratorydata::factory()->create();

        $dbLaboratorydata = $this->laboratorydataRepo->find($laboratorydata->id);

        $dbLaboratorydata = $dbLaboratorydata->toArray();
        $this->assertModelData($laboratorydata->toArray(), $dbLaboratorydata);
    }

    /**
     * @test update
     */
    public function test_update_laboratorydata()
    {
        $laboratorydata = Laboratorydata::factory()->create();
        $fakeLaboratorydata = Laboratorydata::factory()->make()->toArray();

        $updatedLaboratorydata = $this->laboratorydataRepo->update($fakeLaboratorydata, $laboratorydata->id);

        $this->assertModelData($fakeLaboratorydata, $updatedLaboratorydata->toArray());
        $dbLaboratorydata = $this->laboratorydataRepo->find($laboratorydata->id);
        $this->assertModelData($fakeLaboratorydata, $dbLaboratorydata->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_laboratorydata()
    {
        $laboratorydata = Laboratorydata::factory()->create();

        $resp = $this->laboratorydataRepo->delete($laboratorydata->id);

        $this->assertTrue($resp);
        $this->assertNull(Laboratorydata::find($laboratorydata->id), 'Laboratorydata should not exist in DB');
    }
}
