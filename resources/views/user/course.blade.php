@extends('layouts/user')

@section('style')
  <link href="{{ asset('UI/css/user/course.css') }}" rel="stylesheet" >
@endsection

@section('content')
<div class="row">
  @foreach ($data as $course)
  <div class="col-3 mb-5 px-5">
    <div class="card text-center rounded shadow-lg">
      <div class="card-body">
        <h3 class="card-title">{{ $course->names }}</h3>
        <p class="card-text">{{ $course->description }}</p>
        <a href="/user/course/class/{{ $course->id }}" class="card-link">Register Class</a>
        <a href="/user/course/{{ $course->id }}" class="card-link">More details</a>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection