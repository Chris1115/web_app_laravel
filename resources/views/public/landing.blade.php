@extends('layouts/public')

@section('style')
  <link href="{{ asset('UI/css/public/landing.css') }}" rel="stylesheet" >
  <link href="{{ asset('UI/css/layouts_partials/carousel.css') }}" rel="stylesheet" >
@endsection

@section('hero')
    <div class="card container shadow-lg" id="hero">
      <div class="card-body">
        <div class="row">
          <div class="col-7">
            <h5 class="display-1">Simple</h5>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi voluptates iure voluptas architecto, dignissimos modi quo rerum officiis a quam!</p>
          </div>
          <div class="col-5">
            <img src="../../../images/world.svg" style="width: 600px">
          </div>
        </div>
      </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid" id="content">
      <div class="flex-column mt-5 text-center p-5" id="section1">
        <h1 class="display-3 text-white">Learning by doing</h1>
        <p class="text-white my-4 m-auto" style="width: 50%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni expedita natus saepe asperiores sequi laboriosam sapiente nobis, et, ab impedit repellendus enim nostrum nihil id quam quisquam. In voluptatum deserunt commodi facere repudiandae sed incidunt! Culpa voluptatum sed praesentium dolore officiis ab explicabo, quibusdam itaque ipsa tempore in accusamus ratione inventore, distinctio reiciendis modi id aliquam saepe? Vitae blanditiis odio placeat voluptatibus harum laudantium necessitatibus iure, sunt minus sequi, numquam dolorum quam? Quo sed atque tenetur nihil illo quae officia praesentium ab laudantium animi. Earum, sint tempore soluta blanditiis beatae enim unde praesentium sapiente molestiae eos fuga dolorum eaque officia.</p>
      </div>
      <div class="flex-column mt-5 text-center p-5">
        <h1 class="display-3">Services</h1>
        <div class="row p-3">
          <div class="col">
            <div class="card shadow-lg rounded">
              <div class="card-body">
                <h1 class="h1">Class</h1>
                <p class="card-text p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quaerat aut culpa temporibus. Quo, ullam ea. Libero ipsa tempore esse!</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-lg rounded">
              <div class="card-body">
                <h1 class="h1">Forum</h1>
                <p class="card-text p-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit ea laborum veniam, beatae dolore numquam omnis provident obcaecati nulla itaque.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-lg rounded">
              <div class="card-body">
                <h1 class="h1">News</h1>
                <p class="card-text p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime odit vel architecto saepe incidunt asperiores, eos nostrum unde quia corporis!</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-lg rounded">
              <div class="card-body">
                <h1 class="h1">Mentor</h1>
                <p class="card-text p-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, veniam totam. Iure consequatur in placeat illum sunt at ipsa aut!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="/about">
        <h1 class="display-1 text-center text-black mt-5" id="explore">EXPLORE MORE</h1>
      </a>
    </div>
@endsection