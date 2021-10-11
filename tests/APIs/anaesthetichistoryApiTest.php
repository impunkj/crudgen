<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\anaesthetichistory;

class anaesthetichistoryApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_anaesthetichistory()
    {
        $anaesthetichistory = anaesthetichistory::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/anaesthetichistories', $anaesthetichistory
        );

        $this->assertApiResponse($anaesthetichistory);
    }

    /**
     * @test
     */
    public function test_read_anaesthetichistory()
    {
        $anaesthetichistory = anaesthetichistory::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/anaesthetichistories/'.$anaesthetichistory->id
        );

        $this->assertApiResponse($anaesthetichistory->toArray());
    }

    /**
     * @test
     */
    public function test_update_anaesthetichistory()
    {
        $anaesthetichistory = anaesthetichistory::factory()->create();
        $editedanaesthetichistory = anaesthetichistory::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/anaesthetichistories/'.$anaesthetichistory->id,
            $editedanaesthetichistory
        );

        $this->assertApiResponse($editedanaesthetichistory);
    }

    /**
     * @test
     */
    public function test_delete_anaesthetichistory()
    {
        $anaesthetichistory = anaesthetichistory::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/anaesthetichistories/'.$anaesthetichistory->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/anaesthetichistories/'.$anaesthetichistory->id
        );

        $this->response->assertStatus(404);
    }
}
