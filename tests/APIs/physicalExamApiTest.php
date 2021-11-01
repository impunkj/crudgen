<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\physicalExam;

class physicalExamApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_physical_exam()
    {
        $physicalExam = physicalExam::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/physical_exams', $physicalExam
        );

        $this->assertApiResponse($physicalExam);
    }

    /**
     * @test
     */
    public function test_read_physical_exam()
    {
        $physicalExam = physicalExam::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/physical_exams/'.$physicalExam->id
        );

        $this->assertApiResponse($physicalExam->toArray());
    }

    /**
     * @test
     */
    public function test_update_physical_exam()
    {
        $physicalExam = physicalExam::factory()->create();
        $editedphysicalExam = physicalExam::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/physical_exams/'.$physicalExam->id,
            $editedphysicalExam
        );

        $this->assertApiResponse($editedphysicalExam);
    }

    /**
     * @test
     */
    public function test_delete_physical_exam()
    {
        $physicalExam = physicalExam::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/physical_exams/'.$physicalExam->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/physical_exams/'.$physicalExam->id
        );

        $this->response->assertStatus(404);
    }
}
