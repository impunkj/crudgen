<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Events;

class EventsApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_events()
    {
        $events = Events::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/events', $events
        );

        $this->assertApiResponse($events);
    }

    /**
     * @test
     */
    public function test_read_events()
    {
        $events = Events::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/events/'.$events->id
        );

        $this->assertApiResponse($events->toArray());
    }

    /**
     * @test
     */
    public function test_update_events()
    {
        $events = Events::factory()->create();
        $editedEvents = Events::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/events/'.$events->id,
            $editedEvents
        );

        $this->assertApiResponse($editedEvents);
    }

    /**
     * @test
     */
    public function test_delete_events()
    {
        $events = Events::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/events/'.$events->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/events/'.$events->id
        );

        $this->response->assertStatus(404);
    }
}
