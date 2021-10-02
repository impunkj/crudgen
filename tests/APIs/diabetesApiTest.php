<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\diabetes;

class diabetesApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_diabetes()
    {
        $diabetes = diabetes::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/diabetes', $diabetes
        );

        $this->assertApiResponse($diabetes);
    }

    /**
     * @test
     */
    public function test_read_diabetes()
    {
        $diabetes = diabetes::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/diabetes/'.$diabetes->id
        );

        $this->assertApiResponse($diabetes->toArray());
    }

    /**
     * @test
     */
    public function test_update_diabetes()
    {
        $diabetes = diabetes::factory()->create();
        $editeddiabetes = diabetes::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/diabetes/'.$diabetes->id,
            $editeddiabetes
        );

        $this->assertApiResponse($editeddiabetes);
    }

    /**
     * @test
     */
    public function test_delete_diabetes()
    {
        $diabetes = diabetes::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/diabetes/'.$diabetes->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/diabetes/'.$diabetes->id
        );

        $this->response->assertStatus(404);
    }
}
