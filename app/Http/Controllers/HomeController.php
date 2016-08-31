<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\ProblemStatement;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()){
        $recentTechnicalQuestion = ProblemStatement::latest('created_at')->where('domain',1)->first();
        $recentManagementQuestion = ProblemStatement::latest('created_at')->where('domain',2)->first();
        $recentDesignQuestion = ProblemStatement::latest('created_at')->where('domain',3)->first();
        $leadingStudents = User::orderBy('marks','DESC')->take(5)->get();

        return view('home',compact('recentTechnicalQuestion','recentManagementQuestion','recentDesignQuestion','leadingStudents'));
        }

        else{
            return view('guestHome');
        }

    }
}
