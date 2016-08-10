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
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

/*
 * User related routes here
 * */
Route::get('/user/profile','UserController@viewProfile');
Route::get('/user/dashboard', 'UserController@dashboard');

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