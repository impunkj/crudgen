<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\hepaticReflux;

class hepaticRefluxApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_hepatic_reflux()
    {
        $hepaticReflux = hepaticReflux::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/hepatic_refluxes', $hepaticReflux
        );

        $this->assertApiResponse($hepaticReflux);
    }

    /**
     * @test
     */
    public function test_read_hepatic_reflux()
    {
        $hepaticReflux = hepaticReflux::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/hepatic_refluxes/'.$hepaticReflux->id
        );

        $this->assertApiResponse($hepaticReflux->toArray());
    }

    /**
     * @test
     */
    public function test_update_hepatic_reflux()
    {
        $hepaticReflux = hepaticReflux::factory()->create();
        $editedhepaticReflux = hepaticReflux::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/hepatic_refluxes/'.$hepaticReflux->id,
            $editedhepaticReflux
        );

        $this->assertApiResponse($editedhepaticReflux);
    }

    /**
     * @test
     */
    public function test_delete_hepatic_reflux()
    {
        $hepaticReflux = hepaticReflux::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/hepatic_refluxes/'.$hepaticReflux->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/hepatic_refluxes/'.$hepaticReflux->id
        );

        $this->response->assertStatus(404);
    }
}
