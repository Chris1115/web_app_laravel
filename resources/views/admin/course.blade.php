@extends('layouts/public')

@section('style')
  {{-- <link href="./UI/css/public/landing.css" rel="stylesheet" > --}}
@endsection

@section('hero')
    @foreach ($data as $course)
        <p>{{ $course->name }} - {{ $course->mentor }}</p>
    @endforeach
@endsection

@section('content')
    
@endsection