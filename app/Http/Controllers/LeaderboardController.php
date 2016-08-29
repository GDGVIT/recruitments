<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class LeaderboardController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['']]);

    }

    /*
     * Function to get Technical leaderboard
     * */

    public function leaderBoard()
    {
        
        $leadingUsers = User::orderBy('marks','DESC')->get();
        return $leadingUsers;
    }
}
