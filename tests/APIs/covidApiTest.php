<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\covid;

class covidApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_covid()
    {
        $covid = covid::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/covids', $covid
        );

        $this->assertApiResponse($covid);
    }

    /**
     * @test
     */
    public function test_read_covid()
    {
        $covid = covid::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/covids/'.$covid->id
        );

        $this->assertApiResponse($covid->toArray());
    }

    /**
     * @test
     */
    public function test_update_covid()
    {
        $covid = covid::factory()->create();
        $editedcovid = covid::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/covids/'.$covid->id,
            $editedcovid
        );

        $this->assertApiResponse($editedcovid);
    }

    /**
     * @test
     */
    public function test_delete_covid()
    {
        $covid = covid::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/covids/'.$covid->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/covids/'.$covid->id
        );

        $this->response->assertStatus(404);
    }
}
