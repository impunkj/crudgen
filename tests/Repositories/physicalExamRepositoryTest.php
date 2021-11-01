<?php namespace Tests\Repositories;

use App\Models\physicalExam;
use App\Repositories\physicalExamRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class physicalExamRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var physicalExamRepository
     */
    protected $physicalExamRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->physicalExamRepo = \App::make(physicalExamRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_physical_exam()
    {
        $physicalExam = physicalExam::factory()->make()->toArray();

        $createdphysicalExam = $this->physicalExamRepo->create($physicalExam);

        $createdphysicalExam = $createdphysicalExam->toArray();
        $this->assertArrayHasKey('id', $createdphysicalExam);
        $this->assertNotNull($createdphysicalExam['id'], 'Created physicalExam must have id specified');
        $this->assertNotNull(physicalExam::find($createdphysicalExam['id']), 'physicalExam with given id must be in DB');
        $this->assertModelData($physicalExam, $createdphysicalExam);
    }

    /**
     * @test read
     */
    public function test_read_physical_exam()
    {
        $physicalExam = physicalExam::factory()->create();

        $dbphysicalExam = $this->physicalExamRepo->find($physicalExam->id);

        $dbphysicalExam = $dbphysicalExam->toArray();
        $this->assertModelData($physicalExam->toArray(), $dbphysicalExam);
    }

    /**
     * @test update
     */
    public function test_update_physical_exam()
    {
        $physicalExam = physicalExam::factory()->create();
        $fakephysicalExam = physicalExam::factory()->make()->toArray();

        $updatedphysicalExam = $this->physicalExamRepo->update($fakephysicalExam, $physicalExam->id);

        $this->assertModelData($fakephysicalExam, $updatedphysicalExam->toArray());
        $dbphysicalExam = $this->physicalExamRepo->find($physicalExam->id);
        $this->assertModelData($fakephysicalExam, $dbphysicalExam->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_physical_exam()
    {
        $physicalExam = physicalExam::factory()->create();

        $resp = $this->physicalExamRepo->delete($physicalExam->id);

        $this->assertTrue($resp);
        $this->assertNull(physicalExam::find($physicalExam->id), 'physicalExam should not exist in DB');
    }
}
