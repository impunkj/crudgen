<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\patientInformation;

class patientInformationApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_patient_information()
    {
        $patientInformation = patientInformation::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/patient_informations', $patientInformation
        );

        $this->assertApiResponse($patientInformation);
    }

    /**
     * @test
     */
    public function test_read_patient_information()
    {
        $patientInformation = patientInformation::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/patient_informations/'.$patientInformation->id
        );

        $this->assertApiResponse($patientInformation->toArray());
    }

    /**
     * @test
     */
    public function test_update_patient_information()
    {
        $patientInformation = patientInformation::factory()->create();
        $editedpatientInformation = patientInformation::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/patient_informations/'.$patientInformation->id,
            $editedpatientInformation
        );

        $this->assertApiResponse($editedpatientInformation);
    }

    /**
     * @test
     */
    public function test_delete_patient_information()
    {
        $patientInformation = patientInformation::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/patient_informations/'.$patientInformation->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/patient_informations/'.$patientInformation->id
        );

        $this->response->assertStatus(404);
    }
}
