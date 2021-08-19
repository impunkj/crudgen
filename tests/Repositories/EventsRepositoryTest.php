<?php namespace Tests\Repositories;

use App\Models\Events;
use App\Repositories\EventsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class EventsRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var EventsRepository
     */
    protected $eventsRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->eventsRepo = \App::make(EventsRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_events()
    {
        $events = Events::factory()->make()->toArray();

        $createdEvents = $this->eventsRepo->create($events);

        $createdEvents = $createdEvents->toArray();
        $this->assertArrayHasKey('id', $createdEvents);
        $this->assertNotNull($createdEvents['id'], 'Created Events must have id specified');
        $this->assertNotNull(Events::find($createdEvents['id']), 'Events with given id must be in DB');
        $this->assertModelData($events, $createdEvents);
    }

    /**
     * @test read
     */
    public function test_read_events()
    {
        $events = Events::factory()->create();

        $dbEvents = $this->eventsRepo->find($events->id);

        $dbEvents = $dbEvents->toArray();
        $this->assertModelData($events->toArray(), $dbEvents);
    }

    /**
     * @test update
     */
    public function test_update_events()
    {
        $events = Events::factory()->create();
        $fakeEvents = Events::factory()->make()->toArray();

        $updatedEvents = $this->eventsRepo->update($fakeEvents, $events->id);

        $this->assertModelData($fakeEvents, $updatedEvents->toArray());
        $dbEvents = $this->eventsRepo->find($events->id);
        $this->assertModelData($fakeEvents, $dbEvents->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_events()
    {
        $events = Events::factory()->create();

        $resp = $this->eventsRepo->delete($events->id);

        $this->assertTrue($resp);
        $this->assertNull(Events::find($events->id), 'Events should not exist in DB');
    }
}
