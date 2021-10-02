<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\cvsNyha;

class cvsNyhaApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_cvs_nyha()
    {
        $cvsNyha = cvsNyha::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/cvs_nyhas', $cvsNyha
        );

        $this->assertApiResponse($cvsNyha);
    }

    /**
     * @test
     */
    public function test_read_cvs_nyha()
    {
        $cvsNyha = cvsNyha::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/cvs_nyhas/'.$cvsNyha->id
        );

        $this->assertApiResponse($cvsNyha->toArray());
    }

    /**
     * @test
     */
    public function test_update_cvs_nyha()
    {
        $cvsNyha = cvsNyha::factory()->create();
        $editedcvsNyha = cvsNyha::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/cvs_nyhas/'.$cvsNyha->id,
            $editedcvsNyha
        );

        $this->assertApiResponse($editedcvsNyha);
    }

    /**
     * @test
     */
    public function test_delete_cvs_nyha()
    {
        $cvsNyha = cvsNyha::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/cvs_nyhas/'.$cvsNyha->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/cvs_nyhas/'.$cvsNyha->id
        );

        $this->response->assertStatus(404);
    }
}
