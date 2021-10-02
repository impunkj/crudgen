<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\cnsePilesy;

class cnsePilesyApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_cnse_pilesy()
    {
        $cnsePilesy = cnsePilesy::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/cnse_pilesies', $cnsePilesy
        );

        $this->assertApiResponse($cnsePilesy);
    }

    /**
     * @test
     */
    public function test_read_cnse_pilesy()
    {
        $cnsePilesy = cnsePilesy::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/cnse_pilesies/'.$cnsePilesy->id
        );

        $this->assertApiResponse($cnsePilesy->toArray());
    }

    /**
     * @test
     */
    public function test_update_cnse_pilesy()
    {
        $cnsePilesy = cnsePilesy::factory()->create();
        $editedcnsePilesy = cnsePilesy::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/cnse_pilesies/'.$cnsePilesy->id,
            $editedcnsePilesy
        );

        $this->assertApiResponse($editedcnsePilesy);
    }

    /**
     * @test
     */
    public function test_delete_cnse_pilesy()
    {
        $cnsePilesy = cnsePilesy::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/cnse_pilesies/'.$cnsePilesy->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/cnse_pilesies/'.$cnsePilesy->id
        );

        $this->response->assertStatus(404);
    }
}
