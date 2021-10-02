<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\cvsMi;

class cvsMiApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_cvs_mi()
    {
        $cvsMi = cvsMi::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/cvs_mis', $cvsMi
        );

        $this->assertApiResponse($cvsMi);
    }

    /**
     * @test
     */
    public function test_read_cvs_mi()
    {
        $cvsMi = cvsMi::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/cvs_mis/'.$cvsMi->id
        );

        $this->assertApiResponse($cvsMi->toArray());
    }

    /**
     * @test
     */
    public function test_update_cvs_mi()
    {
        $cvsMi = cvsMi::factory()->create();
        $editedcvsMi = cvsMi::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/cvs_mis/'.$cvsMi->id,
            $editedcvsMi
        );

        $this->assertApiResponse($editedcvsMi);
    }

    /**
     * @test
     */
    public function test_delete_cvs_mi()
    {
        $cvsMi = cvsMi::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/cvs_mis/'.$cvsMi->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/cvs_mis/'.$cvsMi->id
        );

        $this->response->assertStatus(404);
    }
}
