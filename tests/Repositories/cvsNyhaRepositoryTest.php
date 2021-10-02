<?php namespace Tests\Repositories;

use App\Models\cvsNyha;
use App\Repositories\cvsNyhaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class cvsNyhaRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var cvsNyhaRepository
     */
    protected $cvsNyhaRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cvsNyhaRepo = \App::make(cvsNyhaRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_cvs_nyha()
    {
        $cvsNyha = cvsNyha::factory()->make()->toArray();

        $createdcvsNyha = $this->cvsNyhaRepo->create($cvsNyha);

        $createdcvsNyha = $createdcvsNyha->toArray();
        $this->assertArrayHasKey('id', $createdcvsNyha);
        $this->assertNotNull($createdcvsNyha['id'], 'Created cvsNyha must have id specified');
        $this->assertNotNull(cvsNyha::find($createdcvsNyha['id']), 'cvsNyha with given id must be in DB');
        $this->assertModelData($cvsNyha, $createdcvsNyha);
    }

    /**
     * @test read
     */
    public function test_read_cvs_nyha()
    {
        $cvsNyha = cvsNyha::factory()->create();

        $dbcvsNyha = $this->cvsNyhaRepo->find($cvsNyha->id);

        $dbcvsNyha = $dbcvsNyha->toArray();
        $this->assertModelData($cvsNyha->toArray(), $dbcvsNyha);
    }

    /**
     * @test update
     */
    public function test_update_cvs_nyha()
    {
        $cvsNyha = cvsNyha::factory()->create();
        $fakecvsNyha = cvsNyha::factory()->make()->toArray();

        $updatedcvsNyha = $this->cvsNyhaRepo->update($fakecvsNyha, $cvsNyha->id);

        $this->assertModelData($fakecvsNyha, $updatedcvsNyha->toArray());
        $dbcvsNyha = $this->cvsNyhaRepo->find($cvsNyha->id);
        $this->assertModelData($fakecvsNyha, $dbcvsNyha->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_cvs_nyha()
    {
        $cvsNyha = cvsNyha::factory()->create();

        $resp = $this->cvsNyhaRepo->delete($cvsNyha->id);

        $this->assertTrue($resp);
        $this->assertNull(cvsNyha::find($cvsNyha->id), 'cvsNyha should not exist in DB');
    }
}
