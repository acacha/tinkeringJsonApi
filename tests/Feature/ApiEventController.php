<?php

namespace Tests\Feature;

use App\Event;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiEventController extends TestCase
{
    /**
     * TEst show events via api
     *
     * @return void
     */
    public function testShowEventsViaApi()
    {
        $this->withoutExceptionHandling();
        $events = factory(Event::class,5)->create();
        $response = $this->json('GET','/api/events');
        $response->assertSuccessful();
//        $response->dump();
        $response->assertJsonStructure([[
            'id','name','created_at','updated_at'
        ]]);
    }

    /**
     * TEst show events via api
     *
     * @return void
     */
    public function testShowEventsViaApiAreBlankIfDatabaseIsEmtpy()
    {

        $response = $this->json('GET','/api/events');
        //TODO comprovar es buit!
        $response->assertSuccessful();


    }
}
