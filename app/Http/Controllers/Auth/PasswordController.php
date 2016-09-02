<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function sendResetToken(Request $request)
    {
        
        $user = User::where('contact',$request->get('contact'))->first();
        if($user!=[]) {
            $token = rand(100000, 999999);
            $message = "Your activation code is : " . $token;
            app('App\Http\Controllers\UserController')->send($user->contact, $message);
            $password = new \App\Password();
            $password->user_id = $user->id;
            $password->activation_code = $token;
            $password->save();
            return view('User.verifyToken');
        }
        else{
            return view('errors.404');
        }
    }
    
    public function forgotPasswordPage()
    {
        return view('User.forgotPassword');
        
    }
}
