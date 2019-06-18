<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use GetStream\StreamLaravel\Facades\FeedManager;

class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  string  $username
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        $feed = FeedManager::getUserFeed($user->id);
        $activities = $feed->getActivities(0,25)['results'];

        return view('profile.index', ['username' => $user->username, 'activities' => $activities]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $username
     * @return \Illuminate\Http\Response
     */
    public function friends($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        $friends = $user->followers()->get();
        return view('profile.friends', ['username' => $user->username, 'friends' => $friends]);
    }
}
