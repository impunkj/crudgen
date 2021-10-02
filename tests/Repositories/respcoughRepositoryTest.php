<?php namespace Tests\Repositories;

use App\Models\respcough;
use App\Repositories\respcoughRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class respcoughRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var respcoughRepository
     */
    protected $respcoughRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->respcoughRepo = \App::make(respcoughRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_respcough()
    {
        $respcough = respcough::factory()->make()->toArray();

        $createdrespcough = $this->respcoughRepo->create($respcough);

        $createdrespcough = $createdrespcough->toArray();
        $this->assertArrayHasKey('id', $createdrespcough);
        $this->assertNotNull($createdrespcough['id'], 'Created respcough must have id specified');
        $this->assertNotNull(respcough::find($createdrespcough['id']), 'respcough with given id must be in DB');
        $this->assertModelData($respcough, $createdrespcough);
    }

    /**
     * @test read
     */
    public function test_read_respcough()
    {
        $respcough = respcough::factory()->create();

        $dbrespcough = $this->respcoughRepo->find($respcough->id);

        $dbrespcough = $dbrespcough->toArray();
        $this->assertModelData($respcough->toArray(), $dbrespcough);
    }

    /**
     * @test update
     */
    public function test_update_respcough()
    {
        $respcough = respcough::factory()->create();
        $fakerespcough = respcough::factory()->make()->toArray();

        $updatedrespcough = $this->respcoughRepo->update($fakerespcough, $respcough->id);

        $this->assertModelData($fakerespcough, $updatedrespcough->toArray());
        $dbrespcough = $this->respcoughRepo->find($respcough->id);
        $this->assertModelData($fakerespcough, $dbrespcough->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_respcough()
    {
        $respcough = respcough::factory()->create();

        $resp = $this->respcoughRepo->delete($respcough->id);

        $this->assertTrue($resp);
        $this->assertNull(respcough::find($respcough->id), 'respcough should not exist in DB');
    }
}
