<?php namespace Tests\Repositories;

use App\Models\cnsStroke;
use App\Repositories\cnsStrokeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class cnsStrokeRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var cnsStrokeRepository
     */
    protected $cnsStrokeRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cnsStrokeRepo = \App::make(cnsStrokeRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_cns_stroke()
    {
        $cnsStroke = cnsStroke::factory()->make()->toArray();

        $createdcnsStroke = $this->cnsStrokeRepo->create($cnsStroke);

        $createdcnsStroke = $createdcnsStroke->toArray();
        $this->assertArrayHasKey('id', $createdcnsStroke);
        $this->assertNotNull($createdcnsStroke['id'], 'Created cnsStroke must have id specified');
        $this->assertNotNull(cnsStroke::find($createdcnsStroke['id']), 'cnsStroke with given id must be in DB');
        $this->assertModelData($cnsStroke, $createdcnsStroke);
    }

    /**
     * @test read
     */
    public function test_read_cns_stroke()
    {
        $cnsStroke = cnsStroke::factory()->create();

        $dbcnsStroke = $this->cnsStrokeRepo->find($cnsStroke->id);

        $dbcnsStroke = $dbcnsStroke->toArray();
        $this->assertModelData($cnsStroke->toArray(), $dbcnsStroke);
    }

    /**
     * @test update
     */
    public function test_update_cns_stroke()
    {
        $cnsStroke = cnsStroke::factory()->create();
        $fakecnsStroke = cnsStroke::factory()->make()->toArray();

        $updatedcnsStroke = $this->cnsStrokeRepo->update($fakecnsStroke, $cnsStroke->id);

        $this->assertModelData($fakecnsStroke, $updatedcnsStroke->toArray());
        $dbcnsStroke = $this->cnsStrokeRepo->find($cnsStroke->id);
        $this->assertModelData($fakecnsStroke, $dbcnsStroke->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_cns_stroke()
    {
        $cnsStroke = cnsStroke::factory()->create();

        $resp = $this->cnsStrokeRepo->delete($cnsStroke->id);

        $this->assertTrue($resp);
        $this->assertNull(cnsStroke::find($cnsStroke->id), 'cnsStroke should not exist in DB');
    }
}
