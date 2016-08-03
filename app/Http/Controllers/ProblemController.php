<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProblemController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin', ['only' => ['add']]);

    }

    /*
     * Function to add a problem statement
     * */

    public function add()
    {
        return view('User.Admin.addProblem');
    }
}
