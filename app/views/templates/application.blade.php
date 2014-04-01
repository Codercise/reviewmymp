
<!DOCTYPE html>
<html>
<head>
  <title>ReviewMy.MP</title>
  {{ HTML::style('bower_components/foundation/css/foundation.css') }}
  {{ HTML::style('css/application.css') }}
</head>
<body class="small-12">
<div class="container small-12">
<nav class="top-bar" data-topbar>
  <ul class="small-5 title-area">
    <li class="name">
      <h1><a href="/">ReviewMyMP</a></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
      <ul class="right">
        <li><a href="http://laravel.com/docs">Laravel Docs</a></li>
        @if (!Auth::check())
          <li>{{ link_to_action('UserController@create', "New User") }}</li>
          <li>{{ link_to_action('SessionController@create', "Login") }}</li>
        <!-- End unlogged in user navigation -->

        <!-- Logged in user navigation -->
        @elseif (Auth::check())
          <li>{{ link_to_action('MemberController@index', "Show all Members of Parliament") }}</li>
          <li>{{ link_to_action('UserController@show', Auth::user()->username, array(Auth::user()->username))}}</li>
          <li>{{ link_to_action('MemberController@create', "New MP") }}</li>
          <li>{{ link_to_action('SessionController@destroy', "Logout") }}</li>
        <!-- End logged in user navigation -->

        <!-- Admin navigation -->
        @elseif (Auth::user()->role == "Admin")
          <li>{{ link_to_action('MemberController@create', "New MP") }}</li>
        @endif
        <!-- End admin navigation -->
      </ul>
  </section>
</nav>
  <div class="small-6 small-offset-3">
    @yield('content')
  </div>
</div>
</body>
</html>