<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;
use Mockery\Generator\StringManipulation\Pass\Pass;

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
            $data = DB::table('passwords')->where('user_id',$user->id)->get();
            if($data){
                DB::table('passwords')->where('user_id',$user->id)->delete();
            }

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
            Session::flash('message', "Please check the number");
            return Redirect::back();
        }
    }
    
    public function forgotPasswordPage()
    {
        return view('User.forgotPassword');
        
    }

    public function verifyToken(Request $request)
    {
        $token = $request->token;
        $passwordQuery = DB::table('passwords')->where('activation_code',$token)->get();
        if($passwordQuery) {
            $orignalToken = $passwordQuery[0]->activation_code;
            if ($orignalToken == $token) {
                return view('User.resetPasswordAfterVerification', compact('token'));
            } else return view('errors.503');
        }
        else{
            return view('errors.tokenMismatch');
        }

    }

    /*
     * Finally change password
     * */

    public function changePassword(Request $request){
        $password = $request->newPassword;
        if(strlen($password)>5) {
            $token = $request->access_token;
            $userValue = DB::table('passwords')->where('activation_code', $token)->get();
            $userId = $userValue[0]->user_id;
            $user = User::find($userId);
            $user->password = Hash::make($password);
            $user->save();
            DB::table('passwords')->where('user_id',$userId)->delete();
            return view('User.passwordChangedSuccessfully');
        }
        else{
            return view('errors.shortPassword');
        }
    }
}
