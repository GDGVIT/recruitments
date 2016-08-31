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
        $this->middleware('auth',['except'=>['send','notifyUser']]);
        $this->middleware('isAdmin', ['only' => ['showUsers','adminDashboard']]);

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
            $domains = DB::table('user_domains')->where('user_id',$user->id)->get();
            return view('User.profile',compact('user','totalMarks','domains'));
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

        $technicalProblemsCount = ProblemStatement::where(['domain'=>1,'display'=>1])->count();
        $managementProblemsCount = ProblemStatement::where(['domain'=>2,'display'=>1])->count();
        $designProblemsCount = ProblemStatement::where(['domain'=>3,'display'=>1])->count();
        $problemArray = array();
        $answeredArray = array();
        $answeredProblems = Submission::where('user_id',Auth::user()->id)->get();
        foreach ($answeredProblems as $problem)
        {
            array_push($answeredArray,$problem->problem_id);
        }
        //$domain = DB::table('user_domains')->where(['user_id'=>Auth::user()->id])->get();
        $domain = [1,2,3];
        foreach ($domain as $item)
        /*{
            $userDomain = $item->domain_id;
            if ($userDomain==1){
                $technicalProblems = ProblemStatement::where(['domain'=>$item->domain_id,'display'=>1])->get();
            }
            elseif ($userDomain==2){
                $managementProblems = ProblemStatement::where(['domain'=>$item->domain_id,'display'=>1])->get();
            }
            elseif($userDomain==3) {
                $designProblems = ProblemStatement::where(['domain'=>$item->domain_id,'display'=>1])->get();
            }
        }*/

        {
            //$problems = ProblemStatement::where(['domain'=>$item->domain_id,'display'=>1])->get();
            $problems = ProblemStatement::where(['domain'=>$item,'display'=>1])->get();
            array_push($problemArray,$problems);
//            array_push($problemArray,['problems'=>$problems,'domain'=>$item->domain_id]);
        }

        //return $problemArray;
        //$problems = ProblemStatement::where(['domain'=>$domain,'display'=>1])->get();
        return view('User.showProblems',compact('problemArray','technicalProblemsCount','managementProblemsCount','designProblemsCount','answeredArray'));
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
        $technicalSubmissions = DB::table('submissions')
                                ->join('problem_statements','submissions.problem_id','=','problem_statements.id')
                                ->where('problem_statements.domain','=',1)
                                ->where('submissions.user_id','=',$user->id)
                                ->get();

        $managementSubmissions = DB::table('submissions')
            ->join('problem_statements','submissions.problem_id','=','problem_statements.id')
            ->where('problem_statements.domain','=',2)
            ->where('submissions.user_id','=',$user->id)
            ->get();

        $designSubmissions = DB::table('submissions')
            ->join('problem_statements','submissions.problem_id','=','problem_statements.id')
            ->where('problem_statements.domain','=',3)
            ->where('submissions.user_id','=',$user->id)
            ->get();
        
        return view('User.Admin.showUserSubmissions',compact('technicalSubmissions','managementSubmissions','designSubmissions'));
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
        $technicalRegistrations = DB::table('user_domains')->where('domain_id',1)->count();
        $managementRegistrations = DB::table('user_domains')->where('domain_id',2)->count();
        $designRegistrations = DB::table('user_domains')->where('domain_id',3)->count();
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
        $people = DB::table('users')
                    ->join('user_domains','users.id','=','user_domains.user_id')
                    ->where('user_domains.domain_id','=',$domain)
                    ->orderBy('marks','DESC')
                    ->take($number)
                    ->get();
        //$people = User::where('domain',$domain)->orderBy('marks', 'desc')->take($number)->get();
        return view('User.Admin.getShortlistedCandidates',compact('people'));

    }
    public function send($contactNumber)
    {
        //Your authentication key
        $authKey = env('MSG_API_KEY');

        //Multiple mobiles numbers separated by comma
        $mobileNumber = $contactNumber;

        //Sender ID,While using route4 sender id should be 6 characters long.
        $senderId = "GDGVIT";

        //Your message to send, Add URL encoding here.
        $message = urlencode("Thank You for registering! You'll be notified when our portal will be live.");

        //Define route
        $route = "transactional";
        //Prepare you post parameters
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobileNumber,
            'message' => $message,
            'sender' => $senderId,
            'route' => $route
        );

        //API URL
        $url="https://control.msg91.com/api/sendhttp.php";

        // init the resource
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
        ));


        //Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


        //get response
        $output = curl_exec($ch);

        //Print error if any
        if(curl_errno($ch))
        {
            echo 'error:' . curl_error($ch);
        }

        curl_close($ch);

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

    /*
     * Notify Users Function
     * */

    /*
     * Show User Profile by ID
     * */
    
    public function showUserProfile($id)
    {
     $user = User::find($id);
        return view('User.Admin.showUserProfile',compact('user'));
    }
    
    
    public function notifyUser(Request $request)
    {
        $contact = $request->contact;
        if($contact!="") {
            $value = DB::table('subscribers')->where('contact', $contact)->get();
            if ($value) {
                return 'You are already subscribed. Chill';
            } else {
                DB::table('subscribers')->insert(['contact' => $contact]);
                $this->send($contact);
                return 'Subscribed successfully';
            }
        }
    }

}
