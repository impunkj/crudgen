<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\hepaticJaundice;

class hepaticJaundiceApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_hepatic_jaundice()
    {
        $hepaticJaundice = hepaticJaundice::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/hepatic_jaundices', $hepaticJaundice
        );

        $this->assertApiResponse($hepaticJaundice);
    }

    /**
     * @test
     */
    public function test_read_hepatic_jaundice()
    {
        $hepaticJaundice = hepaticJaundice::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/hepatic_jaundices/'.$hepaticJaundice->id
        );

        $this->assertApiResponse($hepaticJaundice->toArray());
    }

    /**
     * @test
     */
    public function test_update_hepatic_jaundice()
    {
        $hepaticJaundice = hepaticJaundice::factory()->create();
        $editedhepaticJaundice = hepaticJaundice::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/hepatic_jaundices/'.$hepaticJaundice->id,
            $editedhepaticJaundice
        );

        $this->assertApiResponse($editedhepaticJaundice);
    }

    /**
     * @test
     */
    public function test_delete_hepatic_jaundice()
    {
        $hepaticJaundice = hepaticJaundice::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/hepatic_jaundices/'.$hepaticJaundice->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/hepatic_jaundices/'.$hepaticJaundice->id
        );

        $this->response->assertStatus(404);
    }
}
