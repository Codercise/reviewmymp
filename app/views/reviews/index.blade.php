@extends('templates.application')
@section('content')
  <h2><strong>{{ link_to_action("MemberController@show", "{$member->first_name} {$member->last_name}", array($member->first_name, $member->last_name, $member->electorate)) }}</strong> <small>Member for {{ $member->electorate }}</small></h2>
  <h3>Last 5 Reviews</h3>
  <table>
    <thead>
      <th>Responses</th>
      <th>Commitment to Election Promises</th>
      <th>Community Involvement</th>
      <th>Knowledge of local issues</th>
      <th>Additional Review</th>
      @if (Auth::user()->role == "Admin")
        <th>Admin Actions</th>
      @endif
    </thead>
    <tbody>
    @foreach ($last_five_reviews as $review)
        <tr>
          <td>{{ $review->responses }}</td>
          <td>{{ $review->promises }}</td>
          <td>{{ $review->community }}</td>
          <td>{{ $review->knowledge }}</td>
          <td>{{ $review->additional_review }}</td>
          @if (Auth::user()->role == "Admin")
            <td>{{ link_to_action("ReviewController@destroy", "Delete Review", array($member->first_name, $member->last_name, $member->electorate, $review->id)) }}
              <!-- I'd love to use a DELETE verb but at this stage it's just going to be easier to do it with a get request. -->
              <!--{Form::open(array('action' => 'ReviewController@destroy', $member->first_name, $member->last_name, $member->electorate, $review->id, 'method' => 'delete')) }}
                { Form::button("Submit Review", array('type' => 'submit', 'class' => 'button alert')) }
              { Form::close()} -->
            </td>
          @endif
        </tr>
    @endforeach
    </tbody>
  </table>
  <h3>Average of Reviews for {{ $member->first_name ." ". $member->last_name }}</h3>
  <table>
    <thead>
      <th>Responses</th>
      <th>Commitment to Election Promises</th>
      <th>Community Involvement</th>
      <th>Knowledge of local issues</th>
    </thead>
    <tbody style="text-align: center;">
      <tr>
        <td>{{ round($member_averages["responses"], 0) }}</td>
        <td>{{ round($member_averages["promises"],  0) }}</td>
        <td>{{ round($member_averages["community"], 0) }}</td>
        <td>{{ round($member_averages["knowledge"], 0) }}</td>
      </tr>
    <tbody>
@stop