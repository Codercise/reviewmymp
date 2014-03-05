@extends('templates.application');
@section('content')
  @foreach($members as $member)
    {{ $member->name }}
  @endforeach
@stop