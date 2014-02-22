<!DOCTYPE html>
<html>
<head>
  <title>ReviewMy.MP</title>
  {{ HTML::style('bower_components/foundation/css/foundation.css') }}
  {{ HTML::style('css/application.css') }}
</head>
<body class="small-12">
<div class="container row small-8">
  <div class="logo-area">
    <a href="/"><img src='http://placehold.it/185x75' alt='logo!' /></a>
  </div>
  <div class="navigation">
    <h1>ReviewMy.MP</h1>
    <!-- Unlogged in user navigation -->
    @if (!Auth::check())
      <ul>
        <li>{{ link_to_action('UserController@create', "New User") }}</li>
        <li>{{ link_to_action('SessionController@create', "Login") }}</li>
      </ul>
    @endif
    <!-- End unlogged in user navigation -->

    <!-- Logged in user navigation -->
    @if (Auth::check())
    <ul>
      <li>{{ link_to_action('MemberController@create', "New MP") }}</li>
      <li>{{ link_to_action('SessionController@destroy', "Logout") }}</li>
    </ul>
    @endif
    <!-- End logged in user navigation -->
  </div>
  <div>
    @yield('content')
  </div>
</div>
</body>
</html>