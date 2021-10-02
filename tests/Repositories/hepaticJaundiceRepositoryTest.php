<?php namespace Tests\Repositories;

use App\Models\hepaticJaundice;
use App\Repositories\hepaticJaundiceRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class hepaticJaundiceRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var hepaticJaundiceRepository
     */
    protected $hepaticJaundiceRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->hepaticJaundiceRepo = \App::make(hepaticJaundiceRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_hepatic_jaundice()
    {
        $hepaticJaundice = hepaticJaundice::factory()->make()->toArray();

        $createdhepaticJaundice = $this->hepaticJaundiceRepo->create($hepaticJaundice);

        $createdhepaticJaundice = $createdhepaticJaundice->toArray();
        $this->assertArrayHasKey('id', $createdhepaticJaundice);
        $this->assertNotNull($createdhepaticJaundice['id'], 'Created hepaticJaundice must have id specified');
        $this->assertNotNull(hepaticJaundice::find($createdhepaticJaundice['id']), 'hepaticJaundice with given id must be in DB');
        $this->assertModelData($hepaticJaundice, $createdhepaticJaundice);
    }

    /**
     * @test read
     */
    public function test_read_hepatic_jaundice()
    {
        $hepaticJaundice = hepaticJaundice::factory()->create();

        $dbhepaticJaundice = $this->hepaticJaundiceRepo->find($hepaticJaundice->id);

        $dbhepaticJaundice = $dbhepaticJaundice->toArray();
        $this->assertModelData($hepaticJaundice->toArray(), $dbhepaticJaundice);
    }

    /**
     * @test update
     */
    public function test_update_hepatic_jaundice()
    {
        $hepaticJaundice = hepaticJaundice::factory()->create();
        $fakehepaticJaundice = hepaticJaundice::factory()->make()->toArray();

        $updatedhepaticJaundice = $this->hepaticJaundiceRepo->update($fakehepaticJaundice, $hepaticJaundice->id);

        $this->assertModelData($fakehepaticJaundice, $updatedhepaticJaundice->toArray());
        $dbhepaticJaundice = $this->hepaticJaundiceRepo->find($hepaticJaundice->id);
        $this->assertModelData($fakehepaticJaundice, $dbhepaticJaundice->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_hepatic_jaundice()
    {
        $hepaticJaundice = hepaticJaundice::factory()->create();

        $resp = $this->hepaticJaundiceRepo->delete($hepaticJaundice->id);

        $this->assertTrue($resp);
        $this->assertNull(hepaticJaundice::find($hepaticJaundice->id), 'hepaticJaundice should not exist in DB');
    }
}
