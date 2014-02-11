@extends('templates/application')
@section('content')
  <h2>New User</h2>
  {{ Form::open(array('action' => "UserController@store", "class" => "small-6","role" => "form"), array()) }}
    <div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', "", array('class' => 'form-control')) }}
    </div>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', array('class' => 'form-control')) }}

    {{ Form::button("Submit", array('type' => "submit", "class" => "btn btn-success")) }}
  {{ Form::close() }}
@stop