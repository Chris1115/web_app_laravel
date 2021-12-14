@extends('layouts/admin')

@section('style')
  {{-- <link href="./UI/css/public/landing.css" rel="stylesheet" > --}}
@endsection

@section('content')
<table class="table table-hover">
  <thead style="text-align: center">
    <tr style="background-color: whitesmoke">
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th colspan="3"></th>
    </tr>
  </thead>
  @foreach ($data as $course)
    <tbody>
      <tr style="background-color: white">
        <th scope="row">{{ $course->id }}</th>
        <th scope="col">{{ $course->names }}</th>
        <th scope="col">{{ $course->description }}</th>
        <th scope="col"><a href="/admin/course/add">Insert</a></th>
        <th scope="col"><a href="/admin/course/delete/{{ $course->id }}">Delete</a></th>
        <th scope="col"><a href="/admin/course/edit/{{ $course->id }}">Edit</a></th>
      </tr>
    </tbody>
    @endforeach
  </table>
@endsection