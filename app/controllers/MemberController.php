<?php

class MemberController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    //List all members
    $members = Member::all();
    return View::make('members.index')->with('members', $members);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return View::make('members.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    $member = new Member;
    foreach (Input::except('_token') as $key => $value) {
      $member[$key] = $value;
    }
    $image = Input::file("Image");
    $destination_path = "mp_images";
    $filename = "{$member['first_name']}-{$member['last_name']}.{$image->getClientOriginalExtension()}";
    $image->move($destination_path, $filename); //$image->move($destination_path, "mp-image");
    $validator = Validator::make(
      array(
        'member' => $member
      ),
      array(
        //'member["email"]' => 'required|email|unique:users,email',
      )
    );

    if(!$validator->fails())
    {
      $member->save();
      return Redirect::to("/members/$member->id");
    } else {
      return Redirect::to('/members/new');
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($first_name, $last_name, $electorate)
  {
    $member = Member::where('first_name', '=', $first_name, 'and', 'last_name', $last_name, 'and', 'electorate', '=', $electorate)->first();
    return View::make('members.show')->with('member', $member);
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
    //
  }

}