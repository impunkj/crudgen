<?php namespace Tests\Repositories;

use App\Models\reSputum;
use App\Repositories\reSputumRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class reSputumRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var reSputumRepository
     */
    protected $reSputumRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->reSputumRepo = \App::make(reSputumRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_re_sputum()
    {
        $reSputum = reSputum::factory()->make()->toArray();

        $createdreSputum = $this->reSputumRepo->create($reSputum);

        $createdreSputum = $createdreSputum->toArray();
        $this->assertArrayHasKey('id', $createdreSputum);
        $this->assertNotNull($createdreSputum['id'], 'Created reSputum must have id specified');
        $this->assertNotNull(reSputum::find($createdreSputum['id']), 'reSputum with given id must be in DB');
        $this->assertModelData($reSputum, $createdreSputum);
    }

    /**
     * @test read
     */
    public function test_read_re_sputum()
    {
        $reSputum = reSputum::factory()->create();

        $dbreSputum = $this->reSputumRepo->find($reSputum->id);

        $dbreSputum = $dbreSputum->toArray();
        $this->assertModelData($reSputum->toArray(), $dbreSputum);
    }

    /**
     * @test update
     */
    public function test_update_re_sputum()
    {
        $reSputum = reSputum::factory()->create();
        $fakereSputum = reSputum::factory()->make()->toArray();

        $updatedreSputum = $this->reSputumRepo->update($fakereSputum, $reSputum->id);

        $this->assertModelData($fakereSputum, $updatedreSputum->toArray());
        $dbreSputum = $this->reSputumRepo->find($reSputum->id);
        $this->assertModelData($fakereSputum, $dbreSputum->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_re_sputum()
    {
        $reSputum = reSputum::factory()->create();

        $resp = $this->reSputumRepo->delete($reSputum->id);

        $this->assertTrue($resp);
        $this->assertNull(reSputum::find($reSputum->id), 'reSputum should not exist in DB');
    }
}
