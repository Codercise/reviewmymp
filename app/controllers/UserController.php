<?php

class UserController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //Currently redirects to the home page because why not.
    return View::make('static_pages.home');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    $user = new User;
    foreach (Input::except('_token') as $key => $value) {
      $user[$key] = $value;
    }
    $user->password = Hash::make($user->password);
    $user->role = "User";
    $user_validation = (array) $user;
    $validator = Validator::make(
      array(
        'username' => $user->username,
        'email' => $user->email,
        'password' => $user->password,
        'postcode' => $user->postcode
      ),
      array(
        'username' => 'required|unique:users,username',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
        'postcode' => 'required',
      )

    );
    //return $user .var_dump($validator->errors());
    if(!$validator->fails())
    {
      $user->save();
      Auth::attempt(array('email' => $user->email, 'password' => Input::get('password')));
      return Redirect::to("/users/$user->username");
    } else {
      echo $validator->errors() .$user->username;
      //return Redirect::to('/');
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($username)
  {
    $user = User::where('username', '=', $username)->first();
    return View::make('users.show')->with('user', $user);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    //Delete the user
    $user = User::find($id);
    $user->delete();
    return Redirect::to('/');
  }

}