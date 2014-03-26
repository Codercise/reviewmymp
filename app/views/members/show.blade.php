@extends('templates.application')
  @section('content')
    {{ HTML::image("mp_images/{$member->first_name}-{$member->last_name}.jpg") }}
    <h2>{{ $member->first_name }} {{ $member->last_name }}</h2>
    <ul>
    @foreach ($member["attributes"] as $key => $value)
      <li><strong>{{ ucfirst($key) }}:</strong> {{ $value }}</li>
    @endforeach
      <li><strong>{{ link_to_action('ReviewController@index', "View all reviews for $member->first_name $member->last_name ", array($member->first_name, $member->last_name, $member->electorate)); }}</strong></li>
    </ul>

    <h3>{{ link_to_action('ReviewController@create', "Review {$member->first_name} {$member->last_name}", array($member->first_name, $member->last_name, $member->electorate)) }}</h3>
  @stop