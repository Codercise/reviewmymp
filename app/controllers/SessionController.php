<?php

class SessionController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//Show Login form
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//Log the user in
		$user = User::where('email', '=', Input::get('email'))->first();
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
			Session::put('user', $user);
			return Redirect::to("/users/{$user->username}");
		} else {
			return Redirect::to("/login");
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		//Log the user out
		Auth::logout();
		if (Auth::check())
		{
			$user_id = Auth::user()->id;
			return Redirect::to("users/{$user_id}");
		} else {
			Session::flush();
			return Redirect::to("/login");
		}
	}

}