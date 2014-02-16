@extends('templates.application')
  @section('content')
    <h2>Add new member</h2>
    {{ Form::open(array("class" => "small-6", "role" => "form"))}}
      {{ Form::label('Name') }}
      {{ Form::text('Name') }}

      {{ Form::label('Party') }}
      {{ Form::text('Party') }}

      {{ Form::label('Email') }}
      {{ Form::text('Email') }}

      {{ Form::label('Phone') }}
      {{ Form::text('Phone') }}

      {{ Form::label('OfficeAddress', "Office Address") }}
      {{ Form::text('OfficeAddress') }}

      {{ Form::label('Electorate') }}
      {{ Form::text('Electorate') }}

      {{ Form::label('Area of Government')}}
      <div class="small-12">
        <div class="small-12"><span>State</span> {{ Form::radio('level', 'State') }}</div>
        <div class="small-12"><span>Federal</span> {{ Form::radio('level', 'Federal') }}</div>
      </div>

      {{ Form::label('Ministry')}}
      {{ Form::text('Ministry', "", array('placeholder' => "Leave blank if none")) }}

      {{ Form::label('State') }}
      {{ Form::select('State', array("" => "Select Member's State", 'Australian Capital Territory' => 'Australian Capital Territory', "New South Wales" => "New South Wales", "Northern Territory" => "Northern Territory", "Queensland" => "Queensland", "South Australia" => "South Australia", "Tasmania" => "Tasmania", "Victoria" => "Victoria", "Western Australia" => "Western Australia")) }}

      {{ Form::label('Country') }}
      {{ Form::select('country', array('Australia' => 'Australia'), "Australia", array('disabled' => 'true')) }}

      {{ Form::label('Image') }}
      {{ Form::file('Image') }}

      {{ Form::button('Add member', array('class' => 'button success')) }}
      {{ Form::button('Reset Form', array('class' => 'button alert', 'type' => 'reset')) }}
    {{ Form::close()}}
  @stop