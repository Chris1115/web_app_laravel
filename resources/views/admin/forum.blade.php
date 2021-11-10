@extends('layouts/public')

@section('style')
  {{-- <link href="./UI/css/public/landing.css" rel="stylesheet" > --}}
@endsection

@section('hero')
    @foreach ($data as $forum)
        <p>{{ $forum->title }}</p>
        <p>{{ $forum->question }}</p>
    @endforeach
@endsection

@section('content')
    
@endsection