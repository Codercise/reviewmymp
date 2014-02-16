<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Registering Controllers
Route::controller('user', 'UserController');
Route::controller('session', 'SessionController');
Route::controller('member', 'MemberController');
//End Controllers

//User Routes
Route::get('/', 'UserController@create');
Route::post('/users', 'UserController@store');
Route::get('/users/{id}', 'UserController@show');
//End User Routes

//Session Routes
Route::get('/login', 'SessionController@create');
//End Session Routes

//Member (of Parliament) Routes
Route::get('/members/new', 'MemberController@create');
//End Member Routes