@extends('layouts/user')

@section('style')
  <link href="{{ asset('UI/css/user/news.css') }}" rel="stylesheet" >
@endsection

@section('content')
<div class="container p-3">
  <h2 class="display-5">{{ $news->headline }}</h2>
  <p class="">{{ $news->content }}</p>
  <hr size="5" color="#fff">
  <div class="row">
    @foreach ($comment as $comments)
      <div class="col-2 mx-3">
        <p><strong>{{ $comments->name }}</strong></p>
        <p>{{ $comments->comment }}</p>
      </div>
      <hr>
    @endforeach
    <div class="col mx-3">
      <form action="/user/addComment" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <input type="hidden" name="news_id" value="{{ $news->id }}">
        <label for="comments">{{ auth()->user()->name }}</label>
        <input type="text" name="comments" placeholder="input your comments here">
        <button type="submit" class="btn btn-primary">add comment</button>
    </form>
    </div>
  </div>
  <a href="/user/news"><button class="btn btn-outline-primary">back to news</button></a>
</div>
@endsection