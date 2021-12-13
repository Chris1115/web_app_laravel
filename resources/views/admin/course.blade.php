@extends('layouts/admin')

@section('style')
  {{-- <link href="./UI/css/public/landing.css" rel="stylesheet" > --}}
@endsection

@section('content')
<table class="table table-hover">
  <thead>
    <tr style="background-color: whitesmoke">
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col"></th>
    </tr>
  </thead>
  @foreach ($data as $course)
    <tbody>
      <tr style="background-color: white">
        <th scope="row">{{ $course->id }}</th>
        <th scope="col">{{ $course->name }}</th>
        <th scope="col">{{ $course->description }}</th>
        <th scope="col"><a href="/admin/course/delete/{{ $course->id }}">Delete</a></th>
      </tr>
    </tbody>
    @endforeach
  </table>
@endsection