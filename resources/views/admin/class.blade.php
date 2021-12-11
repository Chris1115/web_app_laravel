@extends('layouts/admin')

@section('style')
  {{-- <link href="./UI/css/public/landing.css" rel="stylesheet" > --}}
@endsection

@section('content')
<table class="table table-hover">
  <thead>
    <tr style="background-color: whitesmoke">
      <th scope="col">#</th>
      <th scope="col">Course_id</th>
      <th scope="col">Username</th>
      <th scope="col">Course</th>
      <th scope="col">Mentor</th>
      <th scope="col">Schedule</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  @foreach ($data as $account)
    <tbody>
      <tr style="background-color: white">
        <th scope="row">{{ $account->id }}</th>
        <th scope="col">{{ $account->course_id }}</th>
        <th scope="col">{{ $account->username }}</th>
        <th scope="col">{{ $account->name }}</th>
        <th scope="col">{{ $account->mentor }}</th>
        <th scope="col">{{ $account->schedule }}</th>
        <th scope="col"><a href="/admin/class/edit/{{ $account->id }}">Edit</a></th>
        <th scope="col"><a href="/admin/class/delete/{{ $account->id }}">Delete</a></th>
      </tr>
    </tbody>
    @endforeach
  </table>
@endsection