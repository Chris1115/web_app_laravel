@extends('layouts/public')
@section('style')
<link href="{{ asset('UI/css/public/carousel.css') }}" rel="stylesheet" >
<link href="{{ asset('UI/css/public/carousel.css') }}" rel="stylesheet" >
@endsection

@section('hero')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Carousel Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    {{-- <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div> --}}
<main>

    <div class="row">
      @foreach ($data as $news)
      <div class="col-lg-4">
        <div class="card px-4 py-5">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        <div class="card-body">
            <h2 class="card-title">{{ $news->headline }}</h2>
            <p class="card-text">{{ $news->content }}</p>
            <a href="/user/forum/{{ $news->id }}"><button class="btn btn-primary">see details</button></a>
        </div>
      </div>
      </div>
    @endforeach
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

@endsection
