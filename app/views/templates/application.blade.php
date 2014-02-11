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
    <img src="http://placehold.it/185x75" alt="logo!" />
  </div>
  <div class="navigation">
    <h1>ReviewMy.MP</h1>
  </div>
  <div>
    @yield('content')
  </div>
</div>
</body>
</html>