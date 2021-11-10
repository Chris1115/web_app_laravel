@extends('layouts/public')

@section('style')
  <link href="{{ asset('UI/css/public/landing.css') }}" rel="stylesheet" >
@endsection

@section('hero')
    <div id="hero">
      <div class="container p-5" id="carousel">
        @include('partials.carousel')
      </div>
    </div>
@endsection

@section('content')
    <h1>DISINI KONTENNYA</h1>
@endsection