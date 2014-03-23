@extends('templates.application')
@section('content')
  <h2><strong>{{ $member->first_name ." " .$member->last_name }}</strong> <small>Member for {{ $member->electorate }}</small></h2>
  <ul>
  @foreach ($reviews as $review)
    @if ($review->additional_review != "")
      <li>{{ $review->additional_review }}</li>
    @endif
  @endforeach
  </ul>

@stop