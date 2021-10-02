<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\respAsthma;

class respAsthmaApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_resp_asthma()
    {
        $respAsthma = respAsthma::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/resp_asthmas', $respAsthma
        );

        $this->assertApiResponse($respAsthma);
    }

    /**
     * @test
     */
    public function test_read_resp_asthma()
    {
        $respAsthma = respAsthma::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/resp_asthmas/'.$respAsthma->id
        );

        $this->assertApiResponse($respAsthma->toArray());
    }

    /**
     * @test
     */
    public function test_update_resp_asthma()
    {
        $respAsthma = respAsthma::factory()->create();
        $editedrespAsthma = respAsthma::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/resp_asthmas/'.$respAsthma->id,
            $editedrespAsthma
        );

        $this->assertApiResponse($editedrespAsthma);
    }

    /**
     * @test
     */
    public function test_delete_resp_asthma()
    {
        $respAsthma = respAsthma::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/resp_asthmas/'.$respAsthma->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/resp_asthmas/'.$respAsthma->id
        );

        $this->response->assertStatus(404);
    }
}
