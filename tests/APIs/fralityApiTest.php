<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\frality;

class fralityApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_frality()
    {
        $frality = frality::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/fralities', $frality
        );

        $this->assertApiResponse($frality);
    }

    /**
     * @test
     */
    public function test_read_frality()
    {
        $frality = frality::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/fralities/'.$frality->id
        );

        $this->assertApiResponse($frality->toArray());
    }

    /**
     * @test
     */
    public function test_update_frality()
    {
        $frality = frality::factory()->create();
        $editedfrality = frality::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/fralities/'.$frality->id,
            $editedfrality
        );

        $this->assertApiResponse($editedfrality);
    }

    /**
     * @test
     */
    public function test_delete_frality()
    {
        $frality = frality::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/fralities/'.$frality->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/fralities/'.$frality->id
        );

        $this->response->assertStatus(404);
    }
}
