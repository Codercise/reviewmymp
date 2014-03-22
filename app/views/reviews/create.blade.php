@extends('templates.application')
@section('content')
<h2>Review {{ $member->first_name }} {{ $member->last_name }} from {{ $member->electorate }}</h2>
  {{ Form::open(array('action' => array('ReviewController@store', $member->first_name, $member->last_name, $member->electorate), 'class' => 'small-9')) }}

  {{ Form::label('Quality of responses') }}
  {{ Form::select('Responses', array('0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5')) }}

  {{ Form::label('Commitment To Election Promises') }}
  {{ Form::select('Promises', array('0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5')) }}

  {{ Form::label('Community Involvement') }}
  {{ Form::select('Community', array('0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5')) }}

  {{ Form::label('Knowledge') }}
  {{ Form::select('Knowledge', array('0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5')) }}

  {{ Form::label('Additional Review') }}
  {{ Form::textarea('additional_review', '', array('class' => 'five-hundred-characters', 'maxlength' => '500')) }}

  {{ Form::button("Submit Review", array('type' => 'submit', 'class' => 'button success')) }}
  {{ Form::close() }}
@stop