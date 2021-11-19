@extends('layouts/admin')

@section('style')
  <link href="{{ asset('UI/trix/trix.css') }}" rel="stylesheet" >
@endsection

@section('content')
  <main class="form-signin">
    <form action="/admin/forum/add" method="post" class="px-5">
      @csrf
      <h1 class="h3 mb-3 fw-normal text-center pt-5 pb-3">Add Course</h1>

      <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control" id="name" placeholder="Input the forum name here.." name="name">
      </div>

      <label for="description">description</label>

      <input id="description" type="hidden" name="description">
      <trix-editor input="description"></trix-editor>

      <select class="form-select" aria-label="Disabled select" name="table">
        <option value="{{ $table }}">{{ $table }}</option>
      </select>


      <a href="/admin"><button type="submit" class="btn btn-primary w-100">Submit</button></a>
    </form>
  </main>
@endsection

@section('script')
    <script src="{{ asset('UI/trix/trix.js') }}"></script>
@endsection