@extends('layouts/admin')

@section('style')
  {{-- <link href="./UI/css/public/landing.css" rel="stylesheet" > --}}
@endsection

@section('content')
<form action="/admin/class/addclasses" method="POST">
  @csrf
<table class="table table-hover">
    <tbody>
      <tr style="background-color: white">
        <th scope="row">Course_ID</th>
        <th scope="col">
          <select class="form-select" aria-label="Default select example" name="course_id">
            <option selected>Open this select menu</option>
            @foreach ($dataf as $item)
            <option value="{{ $item->id }}">{{ $item->id }}</option>
            @endforeach
          </select>
        </th>
      </tr>
      <tr>
          <th scope="row">Mentor</th>
          <th scope="col"> 
            <input type="text" name="mentor" value="">
          </th>
      </tr>
      <tr>
        <th scope="row">Schedule</th>
        <th scope="col"> 
          <input type="text" name="schedule" value="">
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