<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; //USER MODEL

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); // Blocks off unauthorized users for the dashboard.
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('posts', $user->posts);
    }
}
