@extends('layouts/admin')

@section('style')
  {{-- <link href="./UI/css/public/landing.css" rel="stylesheet" > --}}
@endsection

@section('content')
<table class="table table-hover">
  <thead style="text-align: center">
    <tr style="background-color: whitesmoke">
      <th scope="col">#</th>
      <th scope="col">Headline</th>
      <th scope="col">Content</th>
      <th colspan="3">Action</th>
    </tr>
  </thead>
  @foreach ($data as $news)
    <tbody>
      <tr style="background-color: white">
        <th scope="row">{{ $news->id }}</th>
        <th scope="col">{{ $news->headline }}</th>
        <th scope="col">{{ $news->content }}</th>
        <th scope="col"><a href="/admin/news/add">Insert</a></th>
        <th scope="col"><a href="/admin/news/delete/{{ $news->id }}">Delete</a></th>
        <th scope="col"><a href="/admin/news/edit/{{ $news->id }}">Edit</a></th>
      </tr>
    </tbody>
    @endforeach
  </table>
@endsection