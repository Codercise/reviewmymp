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
    <ul>
      <li><a href="http://laravel.com/docs">Laravel Docs</a></li>
      @if (!Auth::check())
        <li>{{ link_to_action('UserController@create', "New User") }}</li>
        <li>{{ link_to_action('SessionController@create', "Login") }}</li>
      <!-- End unlogged in user navigation -->

      <!-- Logged in user navigation -->
      @elseif (Auth::check())
        <li>{{ link_to_action('MemberController@index', "Show all Members of Parliament") }}</li>
        <li>{{ link_to_action('MemberController@create', "New MP") }}</li>
        <li>{{ link_to_action('SessionController@destroy', "Logout") }}</li>
      <!-- End logged in user navigation -->

      <!-- Admin navigation -->
      @elseif (Auth::user()->role == "Admin")
        <li>{{ link_to_action('MemberController@create', "New MP") }}</li>
      @endif
      <!-- End admin navigation -->
    </ul>
  </div>
  <div>
    @yield('content')
  </div>
</div>
</body>
</html>