<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\cnsSurgery;

class cnsSurgeryApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_cns_surgery()
    {
        $cnsSurgery = cnsSurgery::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/cns_surgeries', $cnsSurgery
        );

        $this->assertApiResponse($cnsSurgery);
    }

    /**
     * @test
     */
    public function test_read_cns_surgery()
    {
        $cnsSurgery = cnsSurgery::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/cns_surgeries/'.$cnsSurgery->id
        );

        $this->assertApiResponse($cnsSurgery->toArray());
    }

    /**
     * @test
     */
    public function test_update_cns_surgery()
    {
        $cnsSurgery = cnsSurgery::factory()->create();
        $editedcnsSurgery = cnsSurgery::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/cns_surgeries/'.$cnsSurgery->id,
            $editedcnsSurgery
        );

        $this->assertApiResponse($editedcnsSurgery);
    }

    /**
     * @test
     */
    public function test_delete_cns_surgery()
    {
        $cnsSurgery = cnsSurgery::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/cns_surgeries/'.$cnsSurgery->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/cns_surgeries/'.$cnsSurgery->id
        );

        $this->response->assertStatus(404);
    }
}
