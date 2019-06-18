<?php

namespace App\Http\Controllers;

use App\Venue;
use Illuminate\Http\Request;
use App\Reservation;
use App\Ticket;
use App\User;
use App\Event;
use Auth;

/**
 * Class ReservationController
 * @package App\Http\Controllers
 */
class ReservationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the checkout form for reserving a ticket
     *
     * @return \Illuminate\Http\Response
     * @param $id
     */
    public function checkout($id)
    {
        $event = Event::find($id);
        $venue = Venue::find($event->venue_id);

        return view('reservations.checkout', ['event' => $event, 'venue' => $venue]);
    }

    /**
     * Display the checkout form for reserving a ticket
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function confirmReservation(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'address' => 'required|max:255',
            'country' => 'required|max:255',
        ]);

        $user = User::find(Auth::id());

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->country = $request->country;

        $user->save();

        $event = Event::find($id);
        $venue = Venue::find($event->venue_id);

        return view('reservations.confirm', ['event' => $event, 'venue' => $venue]);
    }

    /**
     * Store a newly created reservation and ticket in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeReservation($id)
    {
        $event = Event::find($id);

        $reservation = new Reservation();
        $reservation->user_id = Auth::id();
        $reservation->event_id = $id;
        $reservation->quantity = 1;
        $reservation->save();

        $ticket = new Ticket();
        $ticket->user_id = Auth::id();
        $ticket->event_id = $id;
        $ticket->reservation_id = $reservation->id;
        $ticket->save();

        echo $ticket->id . ' Reservation ID: ' . $reservation->id;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::where('user_id', Auth::id())->get();

        return view('reservations.index', ['reservations' => $reservations]);
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
     * @param  \App\Reservation $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Reservation $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
