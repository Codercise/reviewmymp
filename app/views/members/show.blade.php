@extends('templates.application')
  @section('content')
    <h2>{{ $member->first_name }} {{ $member->last_name }}</h2>
  @stop