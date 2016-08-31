<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    if (\Illuminate\Support\Facades\Auth::user())
    {
        return view('home');
    }
    else
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

/*
 * User related routes here
 * */
Route::get('/user/profile','UserController@viewProfile');
Route::get('/user/dashboard', 'UserController@dashboard');
Route::post('user/add/domain','UserController@addDomains');
Route::get('user/add/domain','UserController@addDomainsView');

/*
 * Problem Statement Routes
 * */
Route::get('/problems','UserController@showProblems');
Route::get('/problem/show/{id}','ProblemController@showIndividualProblem');
Route::post('/problem/upload','ProblemController@uploadSubmission');

/*
 * Admin routes
 * */

Route::get('/admin/show/users','UserController@showUsers');
Route::get('/admin/problem/add','ProblemController@add');
Route::post('/admin/problem/add', 'ProblemController@insert');
Route::get('/admin/problems/all','ProblemController@showAll');
Route::get('/user/{id}/submissions','UserController@viewUserSubmissions');
Route::post('/admin/update/marks', 'UserController@awardMarks');
Route::get('/admin/award/marks', 'UserController@award');
Route::get('/admin/problem/delete/{id}','ProblemController@softDelete');
Route::get('/admin/problem/undelete/{id}','ProblemController@recoverSoftDelete');
Route::get('/admin/dashboard','UserController@adminDashboard');
Route::get('/admin/users/shortlist','UserController@shortlist');
Route::post('/admin/users/shortlist','UserController@getShortlistedCandidates');
Route::get('/sms', 'UserController@send');
Route::get('/admin/show/user/{id}','UserController@showUserProfile');



/*
 * Guest Routes
 * */

Route::post('/notify','UserController@notifyUser');

/*
*API Routes
*/
Route::get('/api/problems/{domainId}','ProblemController@showAllProblemsAPI');
Route::get('/api/user/problems/count','ProblemController@returnSubmittedProblemsCount');
// /problem/show/id - Individual Problem


/*
 * Leader Board routes
 * */

Route::get('/leaderboard/technical','LeaderboardController@technicalLeaderBoard');
Route::get('/leaderboard/management','LeaderboardController@managementLeaderBoard');
Route::get('/leaderboard/design','LeaderboardController@designLeaderBoard');

