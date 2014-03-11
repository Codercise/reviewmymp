@extends('templates.application')
@section('content')
  <h2>All Member of Parliament</h2>
  @if($members->count() > 0)
    <table>
      <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Party</th>
        <th>Electorate</th>
        <th>State</th>
      </thead>
      <tbody>
      @foreach($members as $member)
        <tr>
          <td>{{ link_to_action("MemberController@show", "{$member->first_name} {$member->last_name}", array($member->first_name, $member->last_name, $member->electorate)) }}</td>
          <td>{{ $member->email }}</td>
          <td>{{ $member->party }}</td>
          <td>{{ $member->electorate }}</td>
          <td>{{ $member->state }}</td>
        </tr>
      @endforeach
      </tbody>

    </ul>
  @else
    <h3>There are no Members of Parliament for the chosen criteria</h3>
  @endif
@stop