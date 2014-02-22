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
			return Redirect::to("/users/{$user->id}");
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
		$user = Session::get('user');
		if (Session::flush())
		{
			return Redirect::to('/login');
		} else {
			return Redirect::to("/users/{$user->id}");
		}
	}

}