@extends('layouts/user')

@section('style')
  <link href="{{ asset("UI/css/user/home.css") }}" rel="stylesheet" >
@endsection


@section('content')
  <h1 class="display-1">WELCOME HOME, {{ auth()->user()->name }}</h1>
@endsection

@section('footer')
    
@endsection