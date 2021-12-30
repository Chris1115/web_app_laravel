@extends('layouts/user')

@section('style')
  <link href="{{ asset('UI/css/user/forum.css') }}" rel="stylesheet" >
@endsection

@section('content')
<h2 class="display-5">{{ $forum->title }}</h2>
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
        <div class="col mx-3">
          <form action="/user/addChat" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <input type="hidden" name="forum_id" value="{{ $forum->id }}">
            <label for="comment">{{ auth()->user()->name }}</label>
            <input type="text" name="comment" placeholder="input your comments here">
            <button type="submit" class="btn btn-primary">add comment</button>
        </form>
        </div>
      </div>
      <a href="/user/forum"><button class="btn btn-outline-primary">back to forum</button></a>
@endsection