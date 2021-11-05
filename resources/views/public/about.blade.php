@extends('layouts/public')

@section('style')
  <link href="./UI/css/public/about.css" rel="stylesheet" >
@endsection

@section('hero')
    <div class="row p-5" id="logo">
        <div class="col-4 offset-2" id="logo-frame">
            <img src="./images/LOGO.png" height="540" width="540">
        </div>
        <div class="col-4 p-5" id="logo-text">
            <p class="fs-4 align-middle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum repellat cupiditate dolore placeat quis harum non praesentium excepturi temporibus earum.</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="row p-5">
        <div class="col-5 p-5 offset-1">
            <div class="card shadow-lg">
                <div class="card-body p-2">
                  <h1 class="card-title text-center display1">Vision</h1>
                  <p class="card-text fs-4 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quis quaerat quidem optio esse, odit ea voluptatem repellat quae eaque mollitia eligendi iste laborum vel deserunt repellendus nam voluptates vitae necessitatibus nemo totam dignissimos. Ut!</p>
                </div>
            </div>
        </div>
        <div class="col-5 p-5">
            <div class="card shadow-lg">
                <div class="card-body">
                  <h1 class="card-title text-center display1">Mission</h1>
                  <p class="card-text fs-4 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quis quaerat quidem optio esse, odit ea voluptatem repellat quae eaque mollitia eligendi iste laborum vel deserunt repellendus nam voluptates vitae necessitatibus nemo totam dignissimos. Ut!</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    
@endsection