<?php

namespace App\Http\Controllers;

use App\ProblemStatement;
use App\User;
use App\Submission;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *

     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['send']]);
        $this->middleware('isAdmin', ['only' => ['showUsers','adminDashboard','send']]);

    }
    
    
    
    /*
     * View User Profile
     * */
    
    public function viewProfile()
    {
        $user = Auth::user();
        if($user)
        {
            $totalMarks = Submission::where('user_id',$user->id)->sum('marks');
            return view('User.profile',compact('user','totalMarks'));
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
         * User's checked problems
         * */

        $checkedProblems = $user->submissions->where('checked','1.00');

        /*
         * User's unchecked problems
         * */
        $unCheckedProblems = $user->submissions->where('checked','0.00');

        /*
         * Attempted Problems
         * */

        $attemptedProblems = $user->submissions;

        return view('User.dashboard',compact('user','domain','checkedProblems','unCheckedProblems','attemptedProblems'));
    }

    /*
     *Show all the problem statements related to the user's domain
     * */

    public function showProblems()
    {
        $domain = Auth::user()->domain;
        $problems = ProblemStatement::where(['domain'=>$domain,'display'=>1])->get();
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
        $userId = $request->get('userId');
        $questionId = $request->get('questionId');

        $marks = floatval($request->get('marks'));
        $submission = Submission::where(['user_id'=>$userId,'problem_id'=>$questionId,'checked'=>0])->first();
        if($submission && (is_float($marks)) && $marks>0) {


            $submission->marks = $marks;
            $submission->checked = 1;
            $submission->save();
            $url = '/user/'.$userId.'/submissions';
            /*
             * Update Marks in Users table.
             *
             * */
            $user = User::find($userId);
            $userMarks = $user->marks;
            $user->marks = $userMarks+$marks;
            $user->save();
            return redirect($url);
        }
        else return 'some issue';
    }

    /*
     * Admin Dashboard
     * */

    public function adminDashboard()
    {
        $technicalRegistrations = User::where('domain',1)->count();
        $managementRegistrations = User::where('domain',2)->count();
        $designRegistrations = User::where('domain',3)->count();
        $totalProblemStatements = ProblemStatement::all()->count();
        $totalSubmissions = Submission::all()->count();
        $checkedSubmissions = Submission::where('checked',1.00)->count();
        $uncheckedSubmissions = $totalSubmissions-$checkedSubmissions;
        
        return view('User.Admin.dashboard',compact('technicalRegistrations','managementRegistrations','designRegistrations','checkedSubmissions','uncheckedSubmissions'));
    }

    /*
     * Function to shortlist people Domain-wise
     * */

    public function shortlist()
    {
        return view('User.Admin.shortListForm');
    }

    public function getShortlistedCandidates(Request $request)
    {
        $domain = $request->domain;
        $number = $request->number;
        $people = User::where('domain',$domain)->orderBy('marks', 'desc')->take($number)->get();
        return view('User.Admin.getShortlistedCandidates',compact('people'));
        
    }
    public function send()
    {
        $this->dispatch(new SendSMS('8098678877', 'Queue Worked'));
    }

    /*
     * Function to add domians
     * */
    public function addDomains(Request $request)
    {
        $myString = $request->domains;
        $myArray = explode(',', $myString);
        foreach ($myArray as $item) {
            $domain = ((int)$item);
            DB::table('user_domains')->insert(['user_id'=>Auth::user()->id,'domain_id'=>$domain]);
        }
        return 'All domains added successfully';
    }
    public function addDomainsView()
    {
        return view('User.addDomain');
    }
}

