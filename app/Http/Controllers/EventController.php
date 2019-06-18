<?php

namespace App\Http\Controllers;

use App\Event;
use App\Genre;
use App\Reservation;
use App\Ticket;
use App\Venue;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($genre)
    {
        $events = NULL;
        $genre = Genre::where('name', $genre)->value('id');
        $events = Event::where('genre_id', $genre);
        return view('eventsearch.index', [$events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($name, $id)
    {
        $event = Event::findOrFail($id);
        $venue = Venue::findOrFail($event->venue_id);

        // Calculate the amount of tickets that are available by getting the venue capacity and subtracting the amount of tickets sold from it.
        $ticketsAvailable = ($venue->capacity - Ticket::where('event_id', $event->id)->count());

        return view('eventsearch.show', ['event' => $event, 'venue' => $venue, 'ticketsAvailable' => $ticketsAvailable]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
