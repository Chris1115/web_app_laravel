@extends('layouts/admin')

@section('style')
  {{-- <link href="./UI/css/public/landing.css" rel="stylesheet" > --}}
@endsection

@section('content')
@dump($data)
<form action="/admin/class/edited" method="POST">
  @csrf
<table class="table table-hover">
    <tbody>
      <tr style="background-color: white">
        <th scope="row">Course</th>
        <th scope="col">
          <select class="form-select" aria-label="Default select example" name="id">
            <option value="{{ $data->id }}">{{ $data->id }}</option>
          </select>
        </th>
      </tr>
      <tr>
          <th scope="row">Mentor</th>
          <th scope="col"> 
            <input type="text" name="mentor" value="{{ $data->mentor }}">
          </th>
      </tr>
      <tr>
        <th scope="row">Schedule</th>
        <th scope="col"> 
          <input type="text" name="schedule" value="{{ $data->schedule }}">
        </th>
    </tr>
      <tr>
          <th>
            <button type="submit" class="btn btn-primary">Submit</button>
          </th>
      </tr>
    </tbody>
  </table>
</form>
@endsection