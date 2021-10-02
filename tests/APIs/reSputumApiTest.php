<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\reSputum;

class reSputumApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_re_sputum()
    {
        $reSputum = reSputum::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/re_sputa', $reSputum
        );

        $this->assertApiResponse($reSputum);
    }

    /**
     * @test
     */
    public function test_read_re_sputum()
    {
        $reSputum = reSputum::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/re_sputa/'.$reSputum->id
        );

        $this->assertApiResponse($reSputum->toArray());
    }

    /**
     * @test
     */
    public function test_update_re_sputum()
    {
        $reSputum = reSputum::factory()->create();
        $editedreSputum = reSputum::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/re_sputa/'.$reSputum->id,
            $editedreSputum
        );

        $this->assertApiResponse($editedreSputum);
    }

    /**
     * @test
     */
    public function test_delete_re_sputum()
    {
        $reSputum = reSputum::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/re_sputa/'.$reSputum->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/re_sputa/'.$reSputum->id
        );

        $this->response->assertStatus(404);
    }
}
