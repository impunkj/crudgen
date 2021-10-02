<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\renalUti;

class renalUtiApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_renal_uti()
    {
        $renalUti = renalUti::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/renal_utis', $renalUti
        );

        $this->assertApiResponse($renalUti);
    }

    /**
     * @test
     */
    public function test_read_renal_uti()
    {
        $renalUti = renalUti::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/renal_utis/'.$renalUti->id
        );

        $this->assertApiResponse($renalUti->toArray());
    }

    /**
     * @test
     */
    public function test_update_renal_uti()
    {
        $renalUti = renalUti::factory()->create();
        $editedrenalUti = renalUti::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/renal_utis/'.$renalUti->id,
            $editedrenalUti
        );

        $this->assertApiResponse($editedrenalUti);
    }

    /**
     * @test
     */
    public function test_delete_renal_uti()
    {
        $renalUti = renalUti::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/renal_utis/'.$renalUti->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/renal_utis/'.$renalUti->id
        );

        $this->response->assertStatus(404);
    }
}
