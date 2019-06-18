<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use GetStream\StreamLaravel\Facades\FeedManager;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  $user
     * @return \Illuminate\Http\Response
     */
    public function store($user)
    {
        $currentUser = User::find(Auth::id());
        $targetUser = User::findOrFail($user)->value('id');

        $currentUser->follow($targetUser);
        return back();
    }

    /**
     * Remove the specified resource from st
     * orage.
     *
     * @param  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        $currentUser = User::find(Auth::id());
        $targetUser = User::findOrFail($user)->value('id');

        $currentUser->unfollow($targetUser);
        return back();
    }
}
