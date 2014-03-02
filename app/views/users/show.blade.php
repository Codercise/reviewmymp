@extends('templates.application')
@section('content')
  <h2>{{ $user->username }}</h2>
  <ul>
    <li>{{ $user->role }}</li>
    <li>{{ $user->created_at }}</li>
  </ul>

  <ul>
  @if (isset(Auth::user()->id))
    @if(Auth::user()->id == $user->id || Auth::user()->role == "Admin")
      <li>{{ link_to_action("UserController@destroy", "Delete user", array("id" =>$user->id)) }}</li>
    @endif
  @endif
  </ul>
@stop