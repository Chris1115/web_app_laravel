<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('UI/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @yield('style')

    <title>{{ $title }}</title>
  </head>
  <body>
    
    @include('partials.nav')

    <div class="row">
      <div class="col">
        @include('partials.sidebars')
      </div>
      <div class="col">
        <h1 class="display1">DISINI KONTEN</h1>
      </div>
    </div>

    @include('partials.footer')

    

    <script src="{{ asset('UI/js/bootstrap.bundle.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{ asset('UI/js/script.js') }}"></script>

  </body>
</html>