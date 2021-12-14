@extends('layouts/admin')

@section('style')
  <link href="{{ asset('UI/trix/trix.css') }}" rel="stylesheet" >
@endsection

@section('content')
@dump($data)
  <main class="form-signin">
    <form action="/admin/news/edited" method="post" class="px-5">
      @csrf
      <h1 class="h3 mb-3 fw-normal text-center pt-5 pb-3">Edit Course</h1>

      <div class="mb-3">
        <label for="names" class="form-label">names</label>
        <input type="hidden" name="id" value="{{ $data->id }}">
        <input type="text" class="form-control" id="names" placeholder="Input the forum names here.." name="names" value="{{ $data->names }}">
      </div>

      <label for="description">description</label>

      <input id="description" type="hidden" name="description" value="{{ $data->description }}">
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