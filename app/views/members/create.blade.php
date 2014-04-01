@extends('templates.application')
  @section('content')
    <h2>Add new member</h2>
    {{ Form::open(array("action" => "MemberController@store", "files" => true, "class" => "small-12", "role" => "form"))}}
      {{ Form::label('First Name') }}
      {{ Form::text('first_name') }}

      {{ Form::label('Last Name') }}
      {{ Form::text('last_name') }}

      {{ Form::label('Party') }}
      {{ Form::select('Party', array("" => "Select Member's Party", "Australian Labor Party" => "Australian Labor Party", "The Nationals" => "The Nationals", "Country Liberal Party" => "Country Liberal Party", "Katter's Australian Party" => "Katter's Australian Party", "Liberal Party of Australia" => "Liberal Party of Australia", "Independent" => "Independent", "Australian Greens" => "Australian Greens", "Palmer United Party" => "Palmer United Party")) }}

      {{ Form::label('Email') }}
      {{ Form::text('Email') }}

      {{ Form::label('Phone') }}
      {{ Form::text('Phone') }}

      {{ Form::label('Address', "Office Address") }}
      {{ Form::text('Address') }}

      {{ Form::label('Electorate') }}
      {{ Form::text('Electorate') }}

      {{ Form::label('Chamber')}}
      <div class="small-12">
        <div class="small-12"><span>House of Representatives</span> {{ Form::radio('chamber', 'House of Representatives') }}</div>
        <div class="small-12"><span>Senate</span> {{ Form::radio('chamber', 'Senate') }}</div>
      </div>

      {{ Form::label('Area of Government')}}
      <div class="small-12">
        <div class="small-12"><span>State</span> {{ Form::radio('area_of_government', 'State') }}</div>
        <div class="small-12"><span>Federal</span> {{ Form::radio('area_of_government', 'Federal') }}</div>
      </div>

      {{ Form::label('Ministry')}}
      {{ Form::text('Ministry', "", array('placeholder' => "Leave blank if none")) }}

      {{ Form::label('State') }}
      {{ Form::select('State', array("" => "Select Member's State", 'Australian Capital Territory' => 'Australian Capital Territory', "New South Wales" => "New South Wales", "Northern Territory" => "Northern Territory", "Queensland" => "Queensland", "South Australia" => "South Australia", "Tasmania" => "Tasmania", "Victoria" => "Victoria", "Western Australia" => "Western Australia")) }}

      {{ Form::label('Country') }}
      {{ Form::select('country', array('Australia' => 'Australia'), "Australia") }}

      {{ Form::label('Image') }}
      {{ Form::file('Image') }}

      {{ Form::button('Add member', array("type" => "submit", 'class' => 'button success')) }}
      {{ Form::button('Reset Form', array('class' => 'button alert', 'type' => 'reset')) }}
    {{ Form::close()}}
  @stop