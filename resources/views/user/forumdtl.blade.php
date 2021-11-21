@extends('layouts/user')

@section('style')
  {{-- <link href="{{ asset('UI/css/user/course.css') }}" rel="stylesheet" > --}}
@endsection

@section('content')
<div class="card px-4 py-5">
  <div class="card-body">
      <h2 class="card-title">{{ $forum->title }}</h2>
      <p class="card-text">{{ $forum->question }}</p>
      <hr size="5" color="#fff">
      <div class="row">
        @foreach ($response as $comments)
          <div class="col mx-3">
            <p><strong>{{ $comments->name }}</strong></p>
            <p>{{ $comments->response }}</p>
          </div>
          <hr>
        @endforeach
      </div>
      <a href="/user/forum"><button class="btn btn-primary">back to forum</button></a>
  </div>
</div>
@dump($response, $forum, auth()->user())
@endsection