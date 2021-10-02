<?php namespace Tests\Repositories;

use App\Models\cvsMi;
use App\Repositories\cvsMiRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class cvsMiRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var cvsMiRepository
     */
    protected $cvsMiRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cvsMiRepo = \App::make(cvsMiRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_cvs_mi()
    {
        $cvsMi = cvsMi::factory()->make()->toArray();

        $createdcvsMi = $this->cvsMiRepo->create($cvsMi);

        $createdcvsMi = $createdcvsMi->toArray();
        $this->assertArrayHasKey('id', $createdcvsMi);
        $this->assertNotNull($createdcvsMi['id'], 'Created cvsMi must have id specified');
        $this->assertNotNull(cvsMi::find($createdcvsMi['id']), 'cvsMi with given id must be in DB');
        $this->assertModelData($cvsMi, $createdcvsMi);
    }

    /**
     * @test read
     */
    public function test_read_cvs_mi()
    {
        $cvsMi = cvsMi::factory()->create();

        $dbcvsMi = $this->cvsMiRepo->find($cvsMi->id);

        $dbcvsMi = $dbcvsMi->toArray();
        $this->assertModelData($cvsMi->toArray(), $dbcvsMi);
    }

    /**
     * @test update
     */
    public function test_update_cvs_mi()
    {
        $cvsMi = cvsMi::factory()->create();
        $fakecvsMi = cvsMi::factory()->make()->toArray();

        $updatedcvsMi = $this->cvsMiRepo->update($fakecvsMi, $cvsMi->id);

        $this->assertModelData($fakecvsMi, $updatedcvsMi->toArray());
        $dbcvsMi = $this->cvsMiRepo->find($cvsMi->id);
        $this->assertModelData($fakecvsMi, $dbcvsMi->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_cvs_mi()
    {
        $cvsMi = cvsMi::factory()->create();

        $resp = $this->cvsMiRepo->delete($cvsMi->id);

        $this->assertTrue($resp);
        $this->assertNull(cvsMi::find($cvsMi->id), 'cvsMi should not exist in DB');
    }
}
