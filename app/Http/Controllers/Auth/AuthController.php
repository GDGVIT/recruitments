<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\UserController;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'contact'=>'required|size:10|unique:users',
            'regno' => 'required|unique:users',
            'why_gdg' => 'required|min:25',
            


        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        /*
         * Need to send after the user create transaction is done
         * */
        app('App\Http\Controllers\UserController')->send($data['contact'],"Thank You for registering! Start solving problems according to your domain. All the best.");
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => 0,
            'regno' =>$data['regno'],
            'experience' =>$data['experience'],
            'why_gdg' =>$data['why_gdg'],
            'linkedin' =>$data['linkedin'],
            'github' =>$data['github'],
            'behance' =>$data['behance'],
            'contact'=>$data['contact'],
            'selected' => 0
        ]);
    }
}
