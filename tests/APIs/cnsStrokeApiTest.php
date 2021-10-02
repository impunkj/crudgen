<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\cnsStroke;

class cnsStrokeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_cns_stroke()
    {
        $cnsStroke = cnsStroke::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/cns_strokes', $cnsStroke
        );

        $this->assertApiResponse($cnsStroke);
    }

    /**
     * @test
     */
    public function test_read_cns_stroke()
    {
        $cnsStroke = cnsStroke::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/cns_strokes/'.$cnsStroke->id
        );

        $this->assertApiResponse($cnsStroke->toArray());
    }

    /**
     * @test
     */
    public function test_update_cns_stroke()
    {
        $cnsStroke = cnsStroke::factory()->create();
        $editedcnsStroke = cnsStroke::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/cns_strokes/'.$cnsStroke->id,
            $editedcnsStroke
        );

        $this->assertApiResponse($editedcnsStroke);
    }

    /**
     * @test
     */
    public function test_delete_cns_stroke()
    {
        $cnsStroke = cnsStroke::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/cns_strokes/'.$cnsStroke->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/cns_strokes/'.$cnsStroke->id
        );

        $this->response->assertStatus(404);
    }
}
