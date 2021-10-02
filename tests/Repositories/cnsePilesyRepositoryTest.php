<?php namespace Tests\Repositories;

use App\Models\cnsePilesy;
use App\Repositories\cnsePilesyRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class cnsePilesyRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var cnsePilesyRepository
     */
    protected $cnsePilesyRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cnsePilesyRepo = \App::make(cnsePilesyRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_cnse_pilesy()
    {
        $cnsePilesy = cnsePilesy::factory()->make()->toArray();

        $createdcnsePilesy = $this->cnsePilesyRepo->create($cnsePilesy);

        $createdcnsePilesy = $createdcnsePilesy->toArray();
        $this->assertArrayHasKey('id', $createdcnsePilesy);
        $this->assertNotNull($createdcnsePilesy['id'], 'Created cnsePilesy must have id specified');
        $this->assertNotNull(cnsePilesy::find($createdcnsePilesy['id']), 'cnsePilesy with given id must be in DB');
        $this->assertModelData($cnsePilesy, $createdcnsePilesy);
    }

    /**
     * @test read
     */
    public function test_read_cnse_pilesy()
    {
        $cnsePilesy = cnsePilesy::factory()->create();

        $dbcnsePilesy = $this->cnsePilesyRepo->find($cnsePilesy->id);

        $dbcnsePilesy = $dbcnsePilesy->toArray();
        $this->assertModelData($cnsePilesy->toArray(), $dbcnsePilesy);
    }

    /**
     * @test update
     */
    public function test_update_cnse_pilesy()
    {
        $cnsePilesy = cnsePilesy::factory()->create();
        $fakecnsePilesy = cnsePilesy::factory()->make()->toArray();

        $updatedcnsePilesy = $this->cnsePilesyRepo->update($fakecnsePilesy, $cnsePilesy->id);

        $this->assertModelData($fakecnsePilesy, $updatedcnsePilesy->toArray());
        $dbcnsePilesy = $this->cnsePilesyRepo->find($cnsePilesy->id);
        $this->assertModelData($fakecnsePilesy, $dbcnsePilesy->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_cnse_pilesy()
    {
        $cnsePilesy = cnsePilesy::factory()->create();

        $resp = $this->cnsePilesyRepo->delete($cnsePilesy->id);

        $this->assertTrue($resp);
        $this->assertNull(cnsePilesy::find($cnsePilesy->id), 'cnsePilesy should not exist in DB');
    }
}
