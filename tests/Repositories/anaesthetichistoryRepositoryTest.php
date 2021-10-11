<?php namespace Tests\Repositories;

use App\Models\anaesthetichistory;
use App\Repositories\anaesthetichistoryRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class anaesthetichistoryRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var anaesthetichistoryRepository
     */
    protected $anaesthetichistoryRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->anaesthetichistoryRepo = \App::make(anaesthetichistoryRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_anaesthetichistory()
    {
        $anaesthetichistory = anaesthetichistory::factory()->make()->toArray();

        $createdanaesthetichistory = $this->anaesthetichistoryRepo->create($anaesthetichistory);

        $createdanaesthetichistory = $createdanaesthetichistory->toArray();
        $this->assertArrayHasKey('id', $createdanaesthetichistory);
        $this->assertNotNull($createdanaesthetichistory['id'], 'Created anaesthetichistory must have id specified');
        $this->assertNotNull(anaesthetichistory::find($createdanaesthetichistory['id']), 'anaesthetichistory with given id must be in DB');
        $this->assertModelData($anaesthetichistory, $createdanaesthetichistory);
    }

    /**
     * @test read
     */
    public function test_read_anaesthetichistory()
    {
        $anaesthetichistory = anaesthetichistory::factory()->create();

        $dbanaesthetichistory = $this->anaesthetichistoryRepo->find($anaesthetichistory->id);

        $dbanaesthetichistory = $dbanaesthetichistory->toArray();
        $this->assertModelData($anaesthetichistory->toArray(), $dbanaesthetichistory);
    }

    /**
     * @test update
     */
    public function test_update_anaesthetichistory()
    {
        $anaesthetichistory = anaesthetichistory::factory()->create();
        $fakeanaesthetichistory = anaesthetichistory::factory()->make()->toArray();

        $updatedanaesthetichistory = $this->anaesthetichistoryRepo->update($fakeanaesthetichistory, $anaesthetichistory->id);

        $this->assertModelData($fakeanaesthetichistory, $updatedanaesthetichistory->toArray());
        $dbanaesthetichistory = $this->anaesthetichistoryRepo->find($anaesthetichistory->id);
        $this->assertModelData($fakeanaesthetichistory, $dbanaesthetichistory->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_anaesthetichistory()
    {
        $anaesthetichistory = anaesthetichistory::factory()->create();

        $resp = $this->anaesthetichistoryRepo->delete($anaesthetichistory->id);

        $this->assertTrue($resp);
        $this->assertNull(anaesthetichistory::find($anaesthetichistory->id), 'anaesthetichistory should not exist in DB');
    }
}
