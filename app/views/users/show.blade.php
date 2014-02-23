@extends('templates.application')
@section('content')
  <h2>{{ $user->username }}</h2>
  <ul>
   <li>{{ link_to_action("UserController@destroy", "Delete user", array("id" =>$user->id)) }}</li>
  </ul>
@stop