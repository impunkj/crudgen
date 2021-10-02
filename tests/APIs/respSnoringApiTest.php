<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\respSnoring;

class respSnoringApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_resp_snoring()
    {
        $respSnoring = respSnoring::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/resp_snorings', $respSnoring
        );

        $this->assertApiResponse($respSnoring);
    }

    /**
     * @test
     */
    public function test_read_resp_snoring()
    {
        $respSnoring = respSnoring::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/resp_snorings/'.$respSnoring->id
        );

        $this->assertApiResponse($respSnoring->toArray());
    }

    /**
     * @test
     */
    public function test_update_resp_snoring()
    {
        $respSnoring = respSnoring::factory()->create();
        $editedrespSnoring = respSnoring::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/resp_snorings/'.$respSnoring->id,
            $editedrespSnoring
        );

        $this->assertApiResponse($editedrespSnoring);
    }

    /**
     * @test
     */
    public function test_delete_resp_snoring()
    {
        $respSnoring = respSnoring::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/resp_snorings/'.$respSnoring->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/resp_snorings/'.$respSnoring->id
        );

        $this->response->assertStatus(404);
    }
}
