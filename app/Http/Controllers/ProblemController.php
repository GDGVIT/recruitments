<?php

namespace App\Http\Controllers;

use App\ProblemStatement;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProblemController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
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
}
