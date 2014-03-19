@extends('templates.application')
@section('content')
  {{ Form::open(array('class' => 'small-9')) }}

  {{ Form::label('Leadership') }}
  {{ Form::select('Leadership', array('0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5')) }}

  {{ Form::label('Quality of responses') }}
  {{ Form::select('Responses', array('0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5')) }}

  {{ Form::label('Following through on election promises') }}
  {{ Form::select('ElectionPromises', array('0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5')) }}

  {{ Form::label('Responsibility') }}
  {{ Form::select('Responsibility', array('0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5')) }}

  {{ Form::label('Knowledge') }}
  {{ Form::select('Knowledge', array('0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5')) }}

  {{ Form::label('Additional Review') }}
  {{ Form::textarea('AdditionalReview', '', array('class' => 'five-hundred-characters', 'maxlength' => '500')) }}

  {{ Form::button("Submit Review", array('type' => 'submit', 'class' => 'button success')) }}
  {{ Form::close() }}
@stop