@extends('layouts/user')

@section('style')
  <link href="{{ asset('UI/css/user/course.css') }}" rel="stylesheet" >
@endsection

@section('hero')
  @foreach ($data as $course)
      <h1>{{ $course['name'] }}</h1>
      <p>{{ $course['mentor'] }}</p>
  @endforeach
@endsection

@section('content')

@endsection