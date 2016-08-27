<?php

namespace App\Http\Controllers;

use App\ProblemStatement;
use App\Submission;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\DomCrawler\Form;
use Illuminate\Support\Facades\DB;

class ProblemController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['showAllProblemsAPI', 'returnSubmittedProblemsCount']]);
        $this->middleware('isAdmin', ['only' => ['add','insert','showAll']]);

    }

    /*
     * Function to add a problem statement
     * */

    public function add()
    {
        return view('User.Admin.addProblem');
    }

    public function insert(Request $request)
    {
        $problemStatement = new ProblemStatement();
        $problemStatement->domain = $request->domain;
        $problemStatement->problem_statement = $request->problem_statement;
        $problemStatement->display = 1;
        $problemStatement->comments = $request->comments;
        $problemStatement->save();
        return back();

    }

    /*
     * Function to show all problem statements (all domains)
     * Middleware -> isAdmin
     * */

    public function showAll()
    {
        $problemStatements = ProblemStatement::all();
        return view('User.Admin.showAllProblems',compact('problemStatements'));
    }

    /*
     * Function to show a single problem
     * */

    public function showIndividualProblem($id)
    {
        $problemStatement = ProblemStatement::where('id',$id)->first();
        // return view('User.showIndividualProblem',compact('problemStatement'));
        if(!$problemStatement)
        {
          $problemStatement = [];
        }

        return $problemStatement;
    }

    /*
     * Function to upload the solution to the problem statement
     * */
    public function uploadSubmission(Request $request)
    {
        $userId = Auth::user()->id;
        $questionId = $request->get('questionId');
        $question = ProblemStatement::where('id',$questionId);
        $query = Submission::where(['user_id'=>$userId,'problem_id'=>$questionId])->first();
        if($query)
        {
            return view('errors.limit');
        }
        else
        {
            if($request->get('url')&&(!$request->file('submission')))
            {

                $submission = new Submission();
                $submission->user_id = $userId;
                $submission->problem_id = $questionId;
                $submission->marks = 0;
                $submission->url = $request->get('url');
                $submission->save();
                return back();
            }
            elseif ($request->file('submission')&&(!$request->get('url')))
            {
                if ($request->file('submission')->isValid())
                {
                    $path = base_path().'/public/uploads/submissions/';

                    $fileName = $userId.'_'.$questionId;
                    $extension = $request->file('submission')->getClientOriginalExtension();
                    $request->file('submission')->move($path , $fileName.'.'.$extension);
                    $url = '/uploads/submissions/'.$fileName.'.'.$extension;


                    $submission = new Submission();
                    $submission->user_id = $userId;
                    $submission->problem_id = $questionId;
                    $submission->marks = 0;
                    $submission->url = $url;
                    $submission->save();
                    return back();

                }
            }
            elseif ($request->file('submission')&&$request->get('url'))
            {
                return view('errors.403');
            }
        }


        /* */



    }

    /*
     * Function to soft-delete any question(Won't be visible)
     * */
    public  function softDelete($id)
    {
        $problem = ProblemStatement::find($id);
        $problem->display  = 0;
        $problem->save();
        return back();
    }

    /*
     * Undo Soft Delete
     * */

    public function recoverSoftDelete($id)
    {
        $problem = ProblemStatement::find($id);
        $problem->display = 1;
        $problem->save();
        return back();
    }

    public function showAllProblemsAPI($domainId)
    {
      $questions = ProblemStatement::where('domain',$domainId)->get();
      return $questions;
    }
    public function returnSubmittedProblemsCount()
    {
      $technicalSubmissions = DB::table('submissions')
                              ->join('problem_statements','problem_statements.id','=','submissions.problem_id')
                              ->where('problem_statements.domain',1)
                              ->where('submissions.user_id','=',Auth::user()->id)
                              ->count();
      $managementSubmissions = DB::table('submissions')
                              ->join('problem_statements','problem_statements.id','=','submissions.problem_id')
                              ->where('problem_statements.domain',2)
                              ->where('submissions.user_id','=',Auth::user()->id)
                              ->count();

      $designSubmissions = DB::table('submissions')
                              ->join('problem_statements','problem_statements.id','=','submissions.problem_id')
                              ->where('problem_statements.domain',3)
                              ->where('submissions.user_id','=',Auth::user()->id)
                              ->count();
        $returnJSONArray = array();
        array_push($returnJSONArray,$technicalSubmissions,$managementSubmissions,$designSubmissions);
        return $returnJSONArray;
    }
}
