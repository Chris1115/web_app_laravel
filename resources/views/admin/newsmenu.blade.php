@extends('layouts/admin')

@section('style')
  <link href="{{ asset('UI/trix/trix.css') }}" rel="stylesheet" >
@endsection

@section('content')
  <main class="form-signin">
    <form action="/admin/course/add" method="post" class="px-5">
      @csrf
      <h1 class="h3 mb-3 fw-normal text-center pt-5 pb-3">Add News</h1>

      <div class="mb-3">
        <label for="headline" class="form-label">Headline</label>
        <input type="text" class="form-control" id="headline" placeholder="Input the forum headline here.." name="headline">
      </div>

      <label for="content">Content</label>

      <input id="content" type="hidden" name="content">
      <trix-editor input="content"></trix-editor>

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