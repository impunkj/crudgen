<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\respSmoking;

class respSmokingApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_resp_smoking()
    {
        $respSmoking = respSmoking::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/resp_smokings', $respSmoking
        );

        $this->assertApiResponse($respSmoking);
    }

    /**
     * @test
     */
    public function test_read_resp_smoking()
    {
        $respSmoking = respSmoking::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/resp_smokings/'.$respSmoking->id
        );

        $this->assertApiResponse($respSmoking->toArray());
    }

    /**
     * @test
     */
    public function test_update_resp_smoking()
    {
        $respSmoking = respSmoking::factory()->create();
        $editedrespSmoking = respSmoking::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/resp_smokings/'.$respSmoking->id,
            $editedrespSmoking
        );

        $this->assertApiResponse($editedrespSmoking);
    }

    /**
     * @test
     */
    public function test_delete_resp_smoking()
    {
        $respSmoking = respSmoking::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/resp_smokings/'.$respSmoking->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/resp_smokings/'.$respSmoking->id
        );

        $this->response->assertStatus(404);
    }
}
