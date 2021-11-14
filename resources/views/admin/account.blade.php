@extends('layouts/public')

@section('style')
  {{-- <link href="./UI/css/public/landing.css" rel="stylesheet" > --}}
@endsection

@section('hero')
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  @foreach ($data as $account)
    <tbody>
      <tr>
        <th scope="row">{{ $account->id }}</th>
        <th scope="col">{{ $account->name }}</th>
        <th scope="col">{{ $account->username }}</th>
        <th scope="col">{{ $account->email }}</th>
      </tr>
    </tbody>
    @endforeach
  </table>
@endsection

@section('content')
    
@endsection