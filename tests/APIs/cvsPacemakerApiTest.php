<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\cvsPacemaker;

class cvsPacemakerApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_cvs_pacemaker()
    {
        $cvsPacemaker = cvsPacemaker::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/cvs_pacemakers', $cvsPacemaker
        );

        $this->assertApiResponse($cvsPacemaker);
    }

    /**
     * @test
     */
    public function test_read_cvs_pacemaker()
    {
        $cvsPacemaker = cvsPacemaker::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/cvs_pacemakers/'.$cvsPacemaker->id
        );

        $this->assertApiResponse($cvsPacemaker->toArray());
    }

    /**
     * @test
     */
    public function test_update_cvs_pacemaker()
    {
        $cvsPacemaker = cvsPacemaker::factory()->create();
        $editedcvsPacemaker = cvsPacemaker::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/cvs_pacemakers/'.$cvsPacemaker->id,
            $editedcvsPacemaker
        );

        $this->assertApiResponse($editedcvsPacemaker);
    }

    /**
     * @test
     */
    public function test_delete_cvs_pacemaker()
    {
        $cvsPacemaker = cvsPacemaker::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/cvs_pacemakers/'.$cvsPacemaker->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/cvs_pacemakers/'.$cvsPacemaker->id
        );

        $this->response->assertStatus(404);
    }
}
