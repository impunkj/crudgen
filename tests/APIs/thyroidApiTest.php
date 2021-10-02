<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\thyroid;

class thyroidApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_thyroid()
    {
        $thyroid = thyroid::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/thyroids', $thyroid
        );

        $this->assertApiResponse($thyroid);
    }

    /**
     * @test
     */
    public function test_read_thyroid()
    {
        $thyroid = thyroid::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/thyroids/'.$thyroid->id
        );

        $this->assertApiResponse($thyroid->toArray());
    }

    /**
     * @test
     */
    public function test_update_thyroid()
    {
        $thyroid = thyroid::factory()->create();
        $editedthyroid = thyroid::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/thyroids/'.$thyroid->id,
            $editedthyroid
        );

        $this->assertApiResponse($editedthyroid);
    }

    /**
     * @test
     */
    public function test_delete_thyroid()
    {
        $thyroid = thyroid::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/thyroids/'.$thyroid->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/thyroids/'.$thyroid->id
        );

        $this->response->assertStatus(404);
    }
}
