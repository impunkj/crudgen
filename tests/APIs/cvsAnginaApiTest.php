<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\cvsAngina;

class cvsAnginaApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_cvs_angina()
    {
        $cvsAngina = cvsAngina::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/cvs_anginas', $cvsAngina
        );

        $this->assertApiResponse($cvsAngina);
    }

    /**
     * @test
     */
    public function test_read_cvs_angina()
    {
        $cvsAngina = cvsAngina::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/cvs_anginas/'.$cvsAngina->id
        );

        $this->assertApiResponse($cvsAngina->toArray());
    }

    /**
     * @test
     */
    public function test_update_cvs_angina()
    {
        $cvsAngina = cvsAngina::factory()->create();
        $editedcvsAngina = cvsAngina::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/cvs_anginas/'.$cvsAngina->id,
            $editedcvsAngina
        );

        $this->assertApiResponse($editedcvsAngina);
    }

    /**
     * @test
     */
    public function test_delete_cvs_angina()
    {
        $cvsAngina = cvsAngina::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/cvs_anginas/'.$cvsAngina->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/cvs_anginas/'.$cvsAngina->id
        );

        $this->response->assertStatus(404);
    }
}
