@extends('templates/application')
@section('content')
  <h2>New User</h2>
  {{ Form::open(array('action' => "UserController@store", "class" => "small-12","role" => "form"), array()) }}

    {{ Form::label('username', 'Username') }}
    {{ Form::text('username', "", array('class' => 'form-control')) }}

    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', "", array('class' => 'form-control')) }}

    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', array('class' => 'form-control')) }}

    {{ Form::button("Submit", array('type' => "submit", "class" => "small-12 button success")) }}
  {{ Form::close() }}
@stop