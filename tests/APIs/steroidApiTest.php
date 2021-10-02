<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\steroid;

class steroidApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_steroid()
    {
        $steroid = steroid::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/steroids', $steroid
        );

        $this->assertApiResponse($steroid);
    }

    /**
     * @test
     */
    public function test_read_steroid()
    {
        $steroid = steroid::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/steroids/'.$steroid->id
        );

        $this->assertApiResponse($steroid->toArray());
    }

    /**
     * @test
     */
    public function test_update_steroid()
    {
        $steroid = steroid::factory()->create();
        $editedsteroid = steroid::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/steroids/'.$steroid->id,
            $editedsteroid
        );

        $this->assertApiResponse($editedsteroid);
    }

    /**
     * @test
     */
    public function test_delete_steroid()
    {
        $steroid = steroid::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/steroids/'.$steroid->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/steroids/'.$steroid->id
        );

        $this->response->assertStatus(404);
    }
}
