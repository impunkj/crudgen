<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\cvsHtn;

class cvsHtnApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_cvs_htn()
    {
        $cvsHtn = cvsHtn::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/cvs_htns', $cvsHtn
        );

        $this->assertApiResponse($cvsHtn);
    }

    /**
     * @test
     */
    public function test_read_cvs_htn()
    {
        $cvsHtn = cvsHtn::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/cvs_htns/'.$cvsHtn->id
        );

        $this->assertApiResponse($cvsHtn->toArray());
    }

    /**
     * @test
     */
    public function test_update_cvs_htn()
    {
        $cvsHtn = cvsHtn::factory()->create();
        $editedcvsHtn = cvsHtn::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/cvs_htns/'.$cvsHtn->id,
            $editedcvsHtn
        );

        $this->assertApiResponse($editedcvsHtn);
    }

    /**
     * @test
     */
    public function test_delete_cvs_htn()
    {
        $cvsHtn = cvsHtn::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/cvs_htns/'.$cvsHtn->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/cvs_htns/'.$cvsHtn->id
        );

        $this->response->assertStatus(404);
    }
}
