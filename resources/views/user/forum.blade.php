@extends('layouts/user')

@section('style')
  {{-- <link href="{{ asset('UI/css/user/course.css') }}" rel="stylesheet" > --}}
@endsection

@section('content')
<div class="flex-column p-4">
    @foreach ($data as $forum)
    <div class="card px-4 py-5">
        <div class="card-body">
            <h2 class="card-title">{{ $forum->title }}</h2>
            <p class="card-text">{{ $forum->question }}</p>
            <a href="/user/forum/{{ $forum->id }}"><button class="btn btn-primary">see details</button></a>
        </div>
      </div>
    @endforeach

@endsection