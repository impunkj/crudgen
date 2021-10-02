<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\respcough;

class respcoughApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_respcough()
    {
        $respcough = respcough::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/respcoughs', $respcough
        );

        $this->assertApiResponse($respcough);
    }

    /**
     * @test
     */
    public function test_read_respcough()
    {
        $respcough = respcough::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/respcoughs/'.$respcough->id
        );

        $this->assertApiResponse($respcough->toArray());
    }

    /**
     * @test
     */
    public function test_update_respcough()
    {
        $respcough = respcough::factory()->create();
        $editedrespcough = respcough::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/respcoughs/'.$respcough->id,
            $editedrespcough
        );

        $this->assertApiResponse($editedrespcough);
    }

    /**
     * @test
     */
    public function test_delete_respcough()
    {
        $respcough = respcough::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/respcoughs/'.$respcough->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/respcoughs/'.$respcough->id
        );

        $this->response->assertStatus(404);
    }
}
