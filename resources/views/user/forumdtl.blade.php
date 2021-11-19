@extends('layouts/user')

@section('style')
  {{-- <link href="{{ asset('UI/css/user/course.css') }}" rel="stylesheet" > --}}
@endsection

@section('content')
{{-- <form action="/user/addChat" method="post">
  @csrf
  <input type="hidden" name="forum_id" value="{{ $response->forums_id }}">
  <input type="hidden" name="user_id" value="{{ $response->users_id }}">
  <input type="text" name="comment">
  <button type="submit">add comment</button>
</form> --}}
@dump($response)
@endsection