<?php namespace Tests\Repositories;

use App\Models\covid;
use App\Repositories\covidRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class covidRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var covidRepository
     */
    protected $covidRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->covidRepo = \App::make(covidRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_covid()
    {
        $covid = covid::factory()->make()->toArray();

        $createdcovid = $this->covidRepo->create($covid);

        $createdcovid = $createdcovid->toArray();
        $this->assertArrayHasKey('id', $createdcovid);
        $this->assertNotNull($createdcovid['id'], 'Created covid must have id specified');
        $this->assertNotNull(covid::find($createdcovid['id']), 'covid with given id must be in DB');
        $this->assertModelData($covid, $createdcovid);
    }

    /**
     * @test read
     */
    public function test_read_covid()
    {
        $covid = covid::factory()->create();

        $dbcovid = $this->covidRepo->find($covid->id);

        $dbcovid = $dbcovid->toArray();
        $this->assertModelData($covid->toArray(), $dbcovid);
    }

    /**
     * @test update
     */
    public function test_update_covid()
    {
        $covid = covid::factory()->create();
        $fakecovid = covid::factory()->make()->toArray();

        $updatedcovid = $this->covidRepo->update($fakecovid, $covid->id);

        $this->assertModelData($fakecovid, $updatedcovid->toArray());
        $dbcovid = $this->covidRepo->find($covid->id);
        $this->assertModelData($fakecovid, $dbcovid->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_covid()
    {
        $covid = covid::factory()->create();

        $resp = $this->covidRepo->delete($covid->id);

        $this->assertTrue($resp);
        $this->assertNull(covid::find($covid->id), 'covid should not exist in DB');
    }
}
