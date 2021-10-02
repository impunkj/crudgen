<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\cnsCognitive;

class cnsCognitiveApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_cns_cognitive()
    {
        $cnsCognitive = cnsCognitive::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/cns_cognitives', $cnsCognitive
        );

        $this->assertApiResponse($cnsCognitive);
    }

    /**
     * @test
     */
    public function test_read_cns_cognitive()
    {
        $cnsCognitive = cnsCognitive::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/cns_cognitives/'.$cnsCognitive->id
        );

        $this->assertApiResponse($cnsCognitive->toArray());
    }

    /**
     * @test
     */
    public function test_update_cns_cognitive()
    {
        $cnsCognitive = cnsCognitive::factory()->create();
        $editedcnsCognitive = cnsCognitive::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/cns_cognitives/'.$cnsCognitive->id,
            $editedcnsCognitive
        );

        $this->assertApiResponse($editedcnsCognitive);
    }

    /**
     * @test
     */
    public function test_delete_cns_cognitive()
    {
        $cnsCognitive = cnsCognitive::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/cns_cognitives/'.$cnsCognitive->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/cns_cognitives/'.$cnsCognitive->id
        );

        $this->response->assertStatus(404);
    }
}
