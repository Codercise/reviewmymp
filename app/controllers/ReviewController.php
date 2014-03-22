<?php

class ReviewController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    //
    return "hello";
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create($first_name, $last_name, $electorate)
  {
    $member = Member::where('first_name', '=', $first_name, 'and', 'last_name', $last_name, 'and', 'electorate', '=', $electorate)->first();
    return View::make('reviews.create')->with('member', $member);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store($first_name, $last_name, $electorate)
  {
    $review = new Review;
    $member = Member::where('first_name', '=', $first_name, 'and', 'last_name', $last_name, 'and', 'electorate', '=', $electorate)->first();
    foreach (Input::except('_token') as $key => $value) {
      $review[$key] = $value;
    }
    $review->member_id = $member->id;
    $review->user_id = Auth::user()->id;
    $validator = Validator::make(
      array(
        'review' => $review
      ),
      array(
        //'member["email"]' => 'required|email|unique:users,email',
      )
    );

    if(!$validator->fails())
    {
      $review->save();
      return Redirect::to("/members/{$first_name}-{$last_name}-{$electorate}/reviews");
    } else {
      return Redirect::to('/members/{$review->member->first_name}-{$review->member->last_name}-{$review->member->electorate}');
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    //
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