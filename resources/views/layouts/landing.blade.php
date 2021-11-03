<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="./UI/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./UI/css/style.css" rel="stylesheet" >

    <title>{{ $title }}</title>
  </head>
  <body>

    @include('partials.nav')
    
    <div class="container-fluid" id="hero">
        @yield('hero')
    </div>

    <div class="container mt-4" id="content">
        @yield('content')
    </div>
    

    <script src="./UI/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./UI/js/script.js"></script>

  </body>
</html>