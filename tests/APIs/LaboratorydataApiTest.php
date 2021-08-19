<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Laboratorydata;

class LaboratorydataApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_laboratorydata()
    {
        $laboratorydata = Laboratorydata::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/laboratorydatas', $laboratorydata
        );

        $this->assertApiResponse($laboratorydata);
    }

    /**
     * @test
     */
    public function test_read_laboratorydata()
    {
        $laboratorydata = Laboratorydata::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/laboratorydatas/'.$laboratorydata->id
        );

        $this->assertApiResponse($laboratorydata->toArray());
    }

    /**
     * @test
     */
    public function test_update_laboratorydata()
    {
        $laboratorydata = Laboratorydata::factory()->create();
        $editedLaboratorydata = Laboratorydata::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/laboratorydatas/'.$laboratorydata->id,
            $editedLaboratorydata
        );

        $this->assertApiResponse($editedLaboratorydata);
    }

    /**
     * @test
     */
    public function test_delete_laboratorydata()
    {
        $laboratorydata = Laboratorydata::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/laboratorydatas/'.$laboratorydata->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/laboratorydatas/'.$laboratorydata->id
        );

        $this->response->assertStatus(404);
    }
}
