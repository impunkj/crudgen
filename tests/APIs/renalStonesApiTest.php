<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\renalStones;

class renalStonesApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_renal_stones()
    {
        $renalStones = renalStones::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/renal_stones', $renalStones
        );

        $this->assertApiResponse($renalStones);
    }

    /**
     * @test
     */
    public function test_read_renal_stones()
    {
        $renalStones = renalStones::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/renal_stones/'.$renalStones->id
        );

        $this->assertApiResponse($renalStones->toArray());
    }

    /**
     * @test
     */
    public function test_update_renal_stones()
    {
        $renalStones = renalStones::factory()->create();
        $editedrenalStones = renalStones::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/renal_stones/'.$renalStones->id,
            $editedrenalStones
        );

        $this->assertApiResponse($editedrenalStones);
    }

    /**
     * @test
     */
    public function test_delete_renal_stones()
    {
        $renalStones = renalStones::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/renal_stones/'.$renalStones->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/renal_stones/'.$renalStones->id
        );

        $this->response->assertStatus(404);
    }
}
