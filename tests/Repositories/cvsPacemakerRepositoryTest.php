<?php namespace Tests\Repositories;

use App\Models\cvsPacemaker;
use App\Repositories\cvsPacemakerRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class cvsPacemakerRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var cvsPacemakerRepository
     */
    protected $cvsPacemakerRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cvsPacemakerRepo = \App::make(cvsPacemakerRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_cvs_pacemaker()
    {
        $cvsPacemaker = cvsPacemaker::factory()->make()->toArray();

        $createdcvsPacemaker = $this->cvsPacemakerRepo->create($cvsPacemaker);

        $createdcvsPacemaker = $createdcvsPacemaker->toArray();
        $this->assertArrayHasKey('id', $createdcvsPacemaker);
        $this->assertNotNull($createdcvsPacemaker['id'], 'Created cvsPacemaker must have id specified');
        $this->assertNotNull(cvsPacemaker::find($createdcvsPacemaker['id']), 'cvsPacemaker with given id must be in DB');
        $this->assertModelData($cvsPacemaker, $createdcvsPacemaker);
    }

    /**
     * @test read
     */
    public function test_read_cvs_pacemaker()
    {
        $cvsPacemaker = cvsPacemaker::factory()->create();

        $dbcvsPacemaker = $this->cvsPacemakerRepo->find($cvsPacemaker->id);

        $dbcvsPacemaker = $dbcvsPacemaker->toArray();
        $this->assertModelData($cvsPacemaker->toArray(), $dbcvsPacemaker);
    }

    /**
     * @test update
     */
    public function test_update_cvs_pacemaker()
    {
        $cvsPacemaker = cvsPacemaker::factory()->create();
        $fakecvsPacemaker = cvsPacemaker::factory()->make()->toArray();

        $updatedcvsPacemaker = $this->cvsPacemakerRepo->update($fakecvsPacemaker, $cvsPacemaker->id);

        $this->assertModelData($fakecvsPacemaker, $updatedcvsPacemaker->toArray());
        $dbcvsPacemaker = $this->cvsPacemakerRepo->find($cvsPacemaker->id);
        $this->assertModelData($fakecvsPacemaker, $dbcvsPacemaker->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_cvs_pacemaker()
    {
        $cvsPacemaker = cvsPacemaker::factory()->create();

        $resp = $this->cvsPacemakerRepo->delete($cvsPacemaker->id);

        $this->assertTrue($resp);
        $this->assertNull(cvsPacemaker::find($cvsPacemaker->id), 'cvsPacemaker should not exist in DB');
    }
}
