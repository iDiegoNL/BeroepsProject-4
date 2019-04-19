<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home2');
    }

    public function pruneTestUsers()
    {
        User::where('name', 'like', 'test-' . '%')->delete();
        return back();
    }

    public function dropUsers()
    {
        User::truncate();
        return redirect(route('register'));
    }
}
