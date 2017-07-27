<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">

  </head>
  <body>

    <header>
      @include('layout.baseHeader')
    </header>

    <main>
      @yield('content')
    </main>

    <footer>
      @yield('footer')
    </footer>

  </body>
</html>
