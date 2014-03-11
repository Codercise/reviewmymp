@extends('templates.application')
  @section('content')
    <h2>{{ $member->first_name }} {{ $member->last_name }}</h2>
    <ul>
    @foreach ($member["attributes"] as $key => $value)
      <li><strong>{{ ucfirst($key) }}:</strong> {{ $value }}</li>
    @endforeach
    </ul>
  @stop