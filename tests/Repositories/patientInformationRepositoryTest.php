<?php namespace Tests\Repositories;

use App\Models\patientInformation;
use App\Repositories\patientInformationRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class patientInformationRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var patientInformationRepository
     */
    protected $patientInformationRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->patientInformationRepo = \App::make(patientInformationRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_patient_information()
    {
        $patientInformation = patientInformation::factory()->make()->toArray();

        $createdpatientInformation = $this->patientInformationRepo->create($patientInformation);

        $createdpatientInformation = $createdpatientInformation->toArray();
        $this->assertArrayHasKey('id', $createdpatientInformation);
        $this->assertNotNull($createdpatientInformation['id'], 'Created patientInformation must have id specified');
        $this->assertNotNull(patientInformation::find($createdpatientInformation['id']), 'patientInformation with given id must be in DB');
        $this->assertModelData($patientInformation, $createdpatientInformation);
    }

    /**
     * @test read
     */
    public function test_read_patient_information()
    {
        $patientInformation = patientInformation::factory()->create();

        $dbpatientInformation = $this->patientInformationRepo->find($patientInformation->id);

        $dbpatientInformation = $dbpatientInformation->toArray();
        $this->assertModelData($patientInformation->toArray(), $dbpatientInformation);
    }

    /**
     * @test update
     */
    public function test_update_patient_information()
    {
        $patientInformation = patientInformation::factory()->create();
        $fakepatientInformation = patientInformation::factory()->make()->toArray();

        $updatedpatientInformation = $this->patientInformationRepo->update($fakepatientInformation, $patientInformation->id);

        $this->assertModelData($fakepatientInformation, $updatedpatientInformation->toArray());
        $dbpatientInformation = $this->patientInformationRepo->find($patientInformation->id);
        $this->assertModelData($fakepatientInformation, $dbpatientInformation->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_patient_information()
    {
        $patientInformation = patientInformation::factory()->create();

        $resp = $this->patientInformationRepo->delete($patientInformation->id);

        $this->assertTrue($resp);
        $this->assertNull(patientInformation::find($patientInformation->id), 'patientInformation should not exist in DB');
    }
}
