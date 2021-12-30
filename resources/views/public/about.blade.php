@extends('layouts/public')

@section('style')
  <link href="{{ asset('UI/css/public/about.css') }}" rel="stylesheet" >
@endsection

@section('hero')
    <div class="row p-5" id="hero">
        <div class="col-10 offset-1 flex-column">
            <h1 class="display-1 text-white pt-5 px-5">About Us</h1>
            <p class="text-white h4 pb-5 pt-3 px-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium voluptate et mollitia dolor enim ex facere ratione! Cupiditate quod animi aut obcaecati harum esse, hic magnam impedit quibusdam alias illo?</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="row p-5">
        <div class="col-4 offset-2 shadow-lg" id="logo-frame">
            <img src="{{ asset('images/LOGO.png') }}" height="540" width="540">
        </div>
        <div class="col-4 p-5">
            <div class="flex-column">
                <p class="fs-4" style="text-decoration: none; color:#DBE8E1;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, nobis! Sed, totam sit voluptatibus repellendus blanditiis id.</p>
                <p class="fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum repellat cupiditate dolore placeat quis harum non praesentium excepturi temporibus earum.</p>
            </div>
        </div>
    </div>
    <div class="row p-5">
        <div class="col-5 p-5 offset-1">
            <div class="card rounded">
                <div class="card-body p-5 shadow-lg">
                  <h1 class="card-title text-center display-3">Vision</h1>
                  <p class="card-text p-3 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quis quaerat quidem optio esse, odit ea voluptatem repellat quae eaque mollitia eligendi iste laborum vel deserunt repellendus nam voluptates vitae necessitatibus nemo totam dignissimos. Ut!</p>
                </div>
            </div>
        </div>
        <div class="col-5 p-5">
            <div class="card rounded p-5 shadow-lg">
                <div class="card-body">
                  <h1 class="card-title text-center display-3">Mission</h1>
                  <p class="card-text p-3 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quis quaerat quidem optio esse, odit ea voluptatem repellat quae eaque mollitia eligendi iste laborum vel deserunt repellendus nam voluptates vitae necessitatibus nemo totam dignissimos. Ut!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-5">
        <div class="col-2 offset-2">
            <img src="{{ asset('icons/person-circle.svg')}}" class="circle m-auto shadow-lg">
        </div>
        <div class="col-2 offset-1">
            <img src="{{ asset('icons/person-circle.svg')}}" class="circle m-auto shadow-lg">
        </div>
        <div class="col-2 offset-1">
            <img src="{{ asset('icons/person-circle.svg')}}" class="circle m-auto shadow-lg">
        </div>
    </div>
    <div class="row">
        <div class="col-2 offset-2">
            <div class="flex-column">
                <h3 class="h3 ps-5 text-center">name_here</h3>
                <h5 class="h6 ps-5 text-center">CEO</h5>
            </div>
        </div>
        <div class="col-2 offset-1">
            <div class="flex-column">
                <h3 class="h3 text-center">name_here</h3>
                <h5 class="h6 text-center">CTO</h5>
            </div>
        </div>
        <div class="col-2 offset-1">
            <div class="flex-column">
                <h3 class="h3 pe-5 text-center">name_here</h3>
                <h5 class="h6 pe-5 text-center">Head Manager</h5>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    
@endsection