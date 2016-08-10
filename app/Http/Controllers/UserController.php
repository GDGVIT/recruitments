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

    public function dashboard()
    {
        $user = Auth::user();

        /*
         * User Domain
         * */

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


        /*
         * User's attempted problems
         * */

        $checkedProblems = Submission::where(['user_id'=>$user->id,'checked'=>1.00])->get();

        /*
         * User's unattempted problems
         * */
//        return $attemptedProblems;
        $unCheckedProblems = Submission::where(['user_id'=>$user->id,'checked'=>0.00])->get();
        
        return view('User.dashboard',compact('user','domain','checkedProblems','unCheckedProblems'));
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
        return view('User.Admin.showAllUsers',compact('users'));
    }
    
    /*
     * Show all the submissions done by user
     * */
    
    public function viewUserSubmissions($id)
    {
        $user = User::where('id',$id)->first();
        $submissions = $user->submissions;
        $userName = $user->name;
        return view('User.Admin.showUserSubmissions',compact('submissions','userName'));
    }


    /*
     * Award Marks for submission
     * */
    public function award(Request $request)
    {
        $userMarks = $request->all();
        return view('User.Admin.awardMarks',compact('userMarks'));
    }

    /*
     * Award or Update marks
     * */

    public function awardMarks(Request $request)
    {
        $requestedData = $request->all();
        $userId = $request->get('userId');
        $questionId = $request->get('questionId');
        $marks = $request->get('marks');
        $submission = Submission::where(['user_id'=>$userId,'problem_id'=>$questionId,'checked'=>0])->first();
        if($submission) {


            $submission->marks = $marks;
            $submission->checked = 1;
            $submission->save();
            return $submission;
        }
        else return 'some issue';
    }


}
