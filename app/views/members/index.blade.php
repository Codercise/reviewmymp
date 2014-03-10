@extends('templates.application');
@section('content')
  <h2>All Member of Parliament</h2>
  @if($members->count() > 0)
    <ul>
      @foreach($members as $member)
        <li>{{ $member->first_name }} {{ $member->last_name }}</li>
      @endforeach
    </ul>
  @else
    <h3>There are no Members of Parliament for the chosen criteria</h3>
    <img src="<?=Croppa::url('/mp_images/ali.jpg', 150, 150, array('resize'))?>" />
  @endif
@stop