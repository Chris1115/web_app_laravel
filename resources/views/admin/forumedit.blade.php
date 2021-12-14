@extends('layouts/admin')

@section('style')
  <link href="{{ asset('UI/trix/trix.css') }}" rel="stylesheet" >
@endsection

@section('content')
@dump($data)
  <main class="form-signin">
    <form action="/admin/forum/edited" method="post" class="px-5">
      @csrf
      <h1 class="h3 mb-3 fw-normal text-center pt-5 pb-3">Edit Forum</h1>

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="hidden" name="id" value="{{ $data->id }}">
        <input type="text" class="form-control" id="title" placeholder="Input the forum title here.." name="title" value="{{ $data->title }}">
      </div>

      <label for="question">Question</label>

      <input id="question" type="hidden" name="question" value="{{ $data->question }}">
      <trix-editor input="question"></trix-editor>

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