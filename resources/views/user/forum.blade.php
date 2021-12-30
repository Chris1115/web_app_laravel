@extends('layouts/user')

@section('style')
  <link href="{{ asset('UI/css/user/forum.css') }}" rel="stylesheet" >
@endsection

@section('content')
<div class="flex-column p-4">
    @foreach ($data as $forum)
    <div class="card p-4 mb-3 rounded">
        <div class="card-body">
            <h2 class="card-title">{{ $forum->title }}</h2>
            <p class="card-text">{{ $forum->question }}</p>
            <a href="/user/forum/{{ $forum->id }}"><button class="btn btn-primary">see details</button></a>
        </div>
      </div>
    @endforeach

@endsection