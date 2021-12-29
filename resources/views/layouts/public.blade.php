<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('UI/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('UI/icons/bootstrap-icons.css') }}" rel="stylesheet">
    <style>
      .navbar-light{
        background:#DBE8E1 !important; 
      }
    </style>

    @yield('style')

    <title>{{ $title }}</title>
  </head>
  <body>

    @include('partials.nav')
    
    <div class="container-fluid">
        @yield('hero')
    </div>

    <div class="container-fluid">
        @yield('content')
    </div>

    @include('partials.footer')
    

    <script src="{{ asset('UI/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('UI/js/script.js') }}"></script>

  </body>
</html>