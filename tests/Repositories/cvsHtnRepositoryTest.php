<?php namespace Tests\Repositories;

use App\Models\cvsHtn;
use App\Repositories\cvsHtnRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class cvsHtnRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var cvsHtnRepository
     */
    protected $cvsHtnRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cvsHtnRepo = \App::make(cvsHtnRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_cvs_htn()
    {
        $cvsHtn = cvsHtn::factory()->make()->toArray();

        $createdcvsHtn = $this->cvsHtnRepo->create($cvsHtn);

        $createdcvsHtn = $createdcvsHtn->toArray();
        $this->assertArrayHasKey('id', $createdcvsHtn);
        $this->assertNotNull($createdcvsHtn['id'], 'Created cvsHtn must have id specified');
        $this->assertNotNull(cvsHtn::find($createdcvsHtn['id']), 'cvsHtn with given id must be in DB');
        $this->assertModelData($cvsHtn, $createdcvsHtn);
    }

    /**
     * @test read
     */
    public function test_read_cvs_htn()
    {
        $cvsHtn = cvsHtn::factory()->create();

        $dbcvsHtn = $this->cvsHtnRepo->find($cvsHtn->id);

        $dbcvsHtn = $dbcvsHtn->toArray();
        $this->assertModelData($cvsHtn->toArray(), $dbcvsHtn);
    }

    /**
     * @test update
     */
    public function test_update_cvs_htn()
    {
        $cvsHtn = cvsHtn::factory()->create();
        $fakecvsHtn = cvsHtn::factory()->make()->toArray();

        $updatedcvsHtn = $this->cvsHtnRepo->update($fakecvsHtn, $cvsHtn->id);

        $this->assertModelData($fakecvsHtn, $updatedcvsHtn->toArray());
        $dbcvsHtn = $this->cvsHtnRepo->find($cvsHtn->id);
        $this->assertModelData($fakecvsHtn, $dbcvsHtn->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_cvs_htn()
    {
        $cvsHtn = cvsHtn::factory()->create();

        $resp = $this->cvsHtnRepo->delete($cvsHtn->id);

        $this->assertTrue($resp);
        $this->assertNull(cvsHtn::find($cvsHtn->id), 'cvsHtn should not exist in DB');
    }
}
