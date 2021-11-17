@extends('layouts/user')

@section('style')
  {{-- <link href="./UI/css/public/landing.css" rel="stylesheet" > --}}
@endsection


@section('content')
  <h1 class="display1">WELCOME HOME, {{ auth()->user()->name }}</h1>
@endsection