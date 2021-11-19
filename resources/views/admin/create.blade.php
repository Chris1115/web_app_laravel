@extends('layouts/admin')

@section('style')
  {{-- <link href="./UI/css/public/landing.css" rel="stylesheet" > --}}
@endsection


@section('content')
<div class="row px-5 py-4">
  
  <div class="col">
    <div class="card text-center" style="width: 18rem;">
      <div class="card-body">
        <h1 class="card-title">Course</h1>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/admin/course" class="card-link">Check List</a>
        <a href="/admin/dashboard" class="card-link">Back to Dashboard</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card text-center" style="width: 18rem;">
      <div class="card-body">
        <h1 class="card-title">Forum</h1>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/admin/forum" class="card-link">Check List</a>
        <a href="/admin/dashboard" class="card-link">Back to Dashboard</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card text-center" style="width: 18rem;">
      <div class="card-body">
        <h1 class="card-title">News</h1>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/admin/News" class="card-link">Check List</a>
        <a href="/admin/dashboard" class="card-link">Back to Dashboard</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card text-center" style="width: 18rem;">
      <div class="card-body">
        <h1 class="card-title">User</h1>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/admin/User" class="card-link">Check List</a>
        <a href="/admin/dashboard" class="card-link">Back to Dashboard</a>
      </div>
    </div>
  </div>
</div>
@endsection