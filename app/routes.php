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
Route::controller('users', 'UserController');
Route::controller('sessions', 'SessionController');
Route::controller('members', 'MemberController');
Route::controller('reviews', 'ReviewController');
//End Controllers

//User Routes
Route::get('/', array('before' => 'guest', 'uses' => 'UserController@create'));
Route::post('/users', 'UserController@store');
Route::get('/users/{username}', 'UserController@show');
Route::get('/users/{username}/delete', 'UserController@destroy');
//End User Routes

//Session Routes
Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');
//End Session Routes

//Member (of Parliament) Routes
Route::get('/members/new', 'MemberController@create');
Route::post('/members', 'MemberController@store');
Route::get('/members', 'MemberController@index');
Route::get('/members/{first_name}-{last_name}-{electorate}', 'MemberController@show');
//End Member Routes

//Review Member Routes
Route::get('/members/{first_name}-{last_name}-{electorate}/review', 'ReviewController@create');
Route::post('/members/{first_name}-{last_name}-{electorate}/review', 'ReviewController@store');
Route::get('/members/{first_name}-{last_name}-{electorate}/reviews', 'ReviewController@index');
Route::get('/members/{first_name}-{last_name}-{electorate}/reviews/{review_id}', 'ReviewController@destroy');
//End Review Member Routes