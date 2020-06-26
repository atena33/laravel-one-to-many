<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title></title>
  </head>
  <body>
    @include('components.header')

    <div class="main">
      @yield('content')
    </div>

    @include('components.footer')
  </body>
</html>
