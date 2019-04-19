<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GetStream\StreamLaravel\Facades\FeedManager;
use Auth;

class FeedController extends Controller
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
     * Display news feed.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        // Get your timeline:
        $feed = FeedManager::getNewsFeeds(Auth::id())['timeline'];

        $feed2 = FeedManager::getUserFeed(Auth::id());

        // Get your timeline activities from Stream:
        $activities = array_merge($feed->getActivities(0,25)['results'], $feed2->getActivities(0,25)['results']);

        $x = 0;

        if ($x == 0) {
            return view('home', [
                'activities' => $activities,
            ]);
        } else {
            echo print_r($feed2->getActivities(0, 25)['results']);
        }
    }
}
