<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
}
