@extends('layouts/admin')

@section('style')
  {{-- <link href="./UI/css/public/landing.css" rel="stylesheet" > --}}
@endsection

@section('content')
<table class="table table-hover">
  <thead style="text-align: center">
    <tr style="background-color: whitesmoke">
      <th scope="col">ID</th>
      <th scope="col">Users_ID</th>
      <th scope="col">Course_ID</th>
      <th scope="col">Class_ID</th>
      <th colspan="3">Action</th>
    </tr>
  </thead>
  @foreach ($data as $datas)
    <tbody>
      <tr style="background-color: white">
        <th scope="row">{{ $datas->id }}</th>
        <th scope="row">{{ $datas->course_id }}</th>
        <th scope="row">{{ $datas->mentor }}</th>
        <th scope="row">{{ $datas->schedule }}</th>
        <th scope="col"><a href="/admin/class/add">Insert</a></th>
        <th scope="col"><a href="/admin/class/delete/{{ $datas->id }}">Delete</a></th>
        <th scope="col"><a href="/admin/class/edit/{{ $datas->id }}">Edit</a></th>
        
      </tr>
    </tbody>
    @endforeach
  </table>
@endsection