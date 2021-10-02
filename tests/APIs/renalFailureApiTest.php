<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\renalFailure;

class renalFailureApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_renal_failure()
    {
        $renalFailure = renalFailure::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/renal_failures', $renalFailure
        );

        $this->assertApiResponse($renalFailure);
    }

    /**
     * @test
     */
    public function test_read_renal_failure()
    {
        $renalFailure = renalFailure::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/renal_failures/'.$renalFailure->id
        );

        $this->assertApiResponse($renalFailure->toArray());
    }

    /**
     * @test
     */
    public function test_update_renal_failure()
    {
        $renalFailure = renalFailure::factory()->create();
        $editedrenalFailure = renalFailure::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/renal_failures/'.$renalFailure->id,
            $editedrenalFailure
        );

        $this->assertApiResponse($editedrenalFailure);
    }

    /**
     * @test
     */
    public function test_delete_renal_failure()
    {
        $renalFailure = renalFailure::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/renal_failures/'.$renalFailure->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/renal_failures/'.$renalFailure->id
        );

        $this->response->assertStatus(404);
    }
}
