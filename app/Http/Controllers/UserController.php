<?php

namespace App\Http\Controllers;

use App\ProblemStatement;
use App\User;
use App\Submission;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *

     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin', ['only' => ['showUsers']]);

    }
    
    
    
    /*
     * View User Profile
     * */
    
    public function viewProfile()
    {
        $user = Auth::user();
        if($user)
        {
            return view('User.profile',compact('user'));
        }
        else
        {
            return view('errors.404');
        }
    }

    /*
     * User Dashboard
     * */

    public function Dashboard()
    {
        $user = Auth::user();
        $domain = $user->domain;
        if($domain==1)
        {
            $domain = 'Technical';
        }
        elseif ($domain==2)
        {
            $domain = 'Management';
        }
        elseif($domain==3)
        {
            $domain = 'Design';
        }
        else
        {
            return view('errors.503');
        }
        
        return view('User.dashboard',compact('user','domain'));
    }

    /*
     *Show all the problem statements related to the user's domain
     * */

    public function showProblems()
    {
        $domain = Auth::user()->domain;
        $problems = ProblemStatement::where('domain',$domain)->get();
        return view('User.showProblems',compact('problems'));
    }

    /*
     * Admin related Functions
     * */

    /*
     *Show registered users
     *  */

    public function showUsers()
    {
        $users = User::all();
        return $users;
    }
    
    /*
     * Show all the submissions done by user
     * */
    
    public function viewUserSubmissions($id)
    {
        $user = User::where('id',$id)->first();
        return $user->submissions;
    }


}
