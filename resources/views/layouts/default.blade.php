<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
    <link rel="stylesheet"  href="/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/bootstrap/js/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>

    @include('layouts._header')

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
      </div>
    </div>
     @include('layouts._footer')
  </body>
</html>