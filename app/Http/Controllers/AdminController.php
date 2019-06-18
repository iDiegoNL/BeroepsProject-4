<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Band;
use App\Reservation;
use App\Ticket;
use App\Venue;
use Carbon\Carbon;
use PDF;

/**
 * Class AdminController
 * @package App\Http\Controllers
 */
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('admin.home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexEvents()
    {
        return view('admin.events.index');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editEvent($id)
    {
        $event = Event::find($id);

        return view('admin.events.edit', ['event' => $event]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateEvent(Request $request, $id)
    {
        $event = Event::find($id);

        $event->name = $request->name;
        $event->info = $request->info;
        $event->public_price = $request->price;

        $event->save();

        return back();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexUsers()
    {
        $users = User::all();

        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function makeUserAdmin($id)
    {
        $user = User::find($id);

        // If the user is an admin, make the user a normal user. Otherwise, make the user an admin.
        if ($user->role == 1) {
            $user->role = 2;
        } else {
            $user->role = 1;
        }
        $user->save();

        return back();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexReservations()
    {
        $reservations = Reservation::all();

        return view('admin.reservations.index', ['reservations' => $reservations]);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getReservationPDF($id)
    {
        $reservation = Reservation::find($id);

        $pdf = PDF::loadView('admin.reservations.pdf', $reservation);
        return $pdf->stream();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addEvents()
    {
        // Check if there is a test venue. If not, create one
        if (Venue::where('name', 'testvenue')->value('id') === NULL) {
            $venue = Venue::create([
                'name' => 'TESTVENUE',
                'type' => 'TESTVENUE',
                'capacity' => 999,
                'postal_code' => 999,
                'city' => 'TESTVENUE',
                'country' => 'TESTVENUE',
                'timezone' => 'TESTVENUE',
                'address' => 'TESTVENUE',
                'cover_photo' => 'TESTVENUE.jpg',
            ]);
        }
        $venue = Venue::where('name', 'TESTVENUE')->first();

        // Check if there is a test band. If not, create one
        if (Band::where('name', 'TESTBAND')->value('id') === NULL) {
            $band = Band::create([
                'name' => 'TESTBAND-' . uniqid(),
                'bio' => 'TESTBAND',
                'genre_ids' => 1,
                'members' => 'Test Member, Test Member and Test Member',
                'email' => 'info@example.com',
                'website' => 'https://example.com',
                'spotify_link' => '3YQKmKGau1PzlVlkL1iodx',
                'soundcloud_link' => 'twentyonepilots',
            ]);
        }
        $band = Band::where('name', 'TESTBAND')->first();
        $eventinfo = '
        <h5 class="weight-normal">TWENTY ØNE PILØTS will perform at the Ziggo Dome as part of their THE BANDITØ TØUR on Thuesday the 12th of March!</h5>
        <p>TWENTY ØNE PILØTS is well known for their energetic live performances. Tyler Joseph and Josh Dun started their career by performing in their birthplace Columbus, Ohio. The catchy mix of hiphop, pop and electronic music was one of the reasons for their quick breakthrough. In 2015 the band\'s success single Ride was the follow up hit for the mega hit Stressed Out, which reached a double platinum status.</p>
        <h5 class="weight-normal">Attention:</h5>
        Bear in mind that it is forbidden to bring a bag with you to this show. Only handbags that aren’t bigger than the size of an A4-paper (8.27 x 11.69 inches) and no thicker than 10 cm (3.9 inches) are allowed inside. If you do bring a bag bigger than this, you will not be allowed to enter the venue. The organizer of this event will do its best to reduce queues as much as possible. We politely ask for your understanding and cooperation.';

        // Create the event
        $event = Event::create([
            'name' => 'TESTEVENT-' . uniqid() . uniqid(),
            'attendees' => "[1]",
            'info' => $eventinfo,
            'type' => 'TESTEVENT',
            'venue_id' => $venue->id,
            'presale' => 0,
            'public_start' => Carbon::now()->toDateTimeString(),
            'public_end' => Carbon::parse('first day of January 2030')->toDateTimeString(),
            'public_price' => 99.99,
            'start_date' => Carbon::parse('first day of January 2030')->toDateTimeString(),
            'genre_id' => 1,
            'max_order_quantity' => 5,
            'cover_photo' => "https://www.rocksound.tv/assets/uploads/Dh0vsYsWsAATs_1.jpg",
        ]);

        return back();
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteEvent($id)
    {
        Event::destroy($id);

        return back();
    }

}
