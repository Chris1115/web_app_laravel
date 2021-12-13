@extends('layouts/admin')

@section('style')
  {{-- <link href="./UI/css/public/landing.css" rel="stylesheet" > --}}
@endsection

@section('content')
<table class="table table-hover">
  <thead>
    <tr style="background-color: whitesmoke">
      <th scope="col">#</th>
      <th scope="col">Headline</th>
      <th scope="col">Content</th>
      <th scope="col"></th>
    </tr>
  </thead>
  @foreach ($data as $news)
    <tbody>
      <tr style="background-color: white">
        <th scope="row">{{ $news->id }}</th>
        <th scope="col">{{ $news->headline }}</th>
        <th scope="col">{{ $news->content }}</th>
        <th scope="col"><a href="/admin/news/delete/{{ $news->id }}">Delete</a></th>
      </tr>
    </tbody>
    @endforeach
  </table>
@endsection