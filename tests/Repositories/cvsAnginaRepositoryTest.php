<?php namespace Tests\Repositories;

use App\Models\cvsAngina;
use App\Repositories\cvsAnginaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class cvsAnginaRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var cvsAnginaRepository
     */
    protected $cvsAnginaRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cvsAnginaRepo = \App::make(cvsAnginaRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_cvs_angina()
    {
        $cvsAngina = cvsAngina::factory()->make()->toArray();

        $createdcvsAngina = $this->cvsAnginaRepo->create($cvsAngina);

        $createdcvsAngina = $createdcvsAngina->toArray();
        $this->assertArrayHasKey('id', $createdcvsAngina);
        $this->assertNotNull($createdcvsAngina['id'], 'Created cvsAngina must have id specified');
        $this->assertNotNull(cvsAngina::find($createdcvsAngina['id']), 'cvsAngina with given id must be in DB');
        $this->assertModelData($cvsAngina, $createdcvsAngina);
    }

    /**
     * @test read
     */
    public function test_read_cvs_angina()
    {
        $cvsAngina = cvsAngina::factory()->create();

        $dbcvsAngina = $this->cvsAnginaRepo->find($cvsAngina->id);

        $dbcvsAngina = $dbcvsAngina->toArray();
        $this->assertModelData($cvsAngina->toArray(), $dbcvsAngina);
    }

    /**
     * @test update
     */
    public function test_update_cvs_angina()
    {
        $cvsAngina = cvsAngina::factory()->create();
        $fakecvsAngina = cvsAngina::factory()->make()->toArray();

        $updatedcvsAngina = $this->cvsAnginaRepo->update($fakecvsAngina, $cvsAngina->id);

        $this->assertModelData($fakecvsAngina, $updatedcvsAngina->toArray());
        $dbcvsAngina = $this->cvsAnginaRepo->find($cvsAngina->id);
        $this->assertModelData($fakecvsAngina, $dbcvsAngina->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_cvs_angina()
    {
        $cvsAngina = cvsAngina::factory()->create();

        $resp = $this->cvsAnginaRepo->delete($cvsAngina->id);

        $this->assertTrue($resp);
        $this->assertNull(cvsAngina::find($cvsAngina->id), 'cvsAngina should not exist in DB');
    }
}
