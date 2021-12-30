@extends('layouts/user')
@section('style')
<link href="{{ asset('UI/css/public/carousel.css') }}" rel="stylesheet" >
<link href="{{ asset('UI/css/public/carousel.css') }}" rel="stylesheet" >
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
<link href="carousel.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset("UI/css/user/news.css") }}">

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
@endsection

@section('content')
    <!-- Custom styles for this template -->
  <body>
<main>

    <div class="flex-column p-4">
      @foreach ($data as $news)
        <div class="card p-3 mb-3 rounded">
          <div class="card-body">
            <div class="row">
              <div class="col-2">
                <img src="" id="img">
              </div>
              <div class="col-10">
                <h2 class="card-title">{{ $news->headline }}</h2>
                <p class="card-text">{{ $news->content }}</p>
                <a href="/user/news/{{ $news->id }}"><button class="btn btn-primary">see details</button></a>
              </div>
            </div>
          </div>
      </div>
    @endforeach
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>

@endsection
