@extends('layouts/public')

@section('style')
  {{-- <link href="./UI/css/public/landing.css" rel="stylesheet" > --}}
@endsection

@section('hero')
    <h1 class="display1">WELCOME HOME, {{ auth()->user()->name }}</h1>
@endsection

@section('content')
    
@endsection