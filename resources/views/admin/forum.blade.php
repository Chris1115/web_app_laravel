@extends('layouts/admin')

@section('style')
  {{-- <link href="./UI/css/public/landing.css" rel="stylesheet" > --}}
@endsection

@section('content')
<table class="table table-hover">
  <thead>
    <tr style="background-color: whitesmoke">
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Question</th>
      <th scope="col"></th>
    </tr>
  </thead>
  @foreach ($data as $forum)
    <tbody>
      <tr style="background-color: white">
        <th scope="row">{{ $forum->id }}</th>
        <th scope="col">{{ $forum->title }}</th>
        <th scope="col">{{ $forum->question }}</th>
        <th scope="col"><a href="/admin/forum/delete/{{ $forum->id }}">Delete</a></th>
      </tr>
    </tbody>
    @endforeach
  </table>
@endsection