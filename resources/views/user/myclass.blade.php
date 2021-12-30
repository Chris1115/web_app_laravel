@extends('layouts/user')

@section('style')
<link rel="stylesheet" href="{{ asset("UI/css/user/myclass.css") }}">
@endsection

@section('content')
@if ($classdtl == NUll)
    <h1>No Class, yet</h1>
@else
@foreach ($classdtl as $item)
<table class="table table-bordered">
    <thead style="text-align: center">
        <th>Id</th>
        <th>Name</th>
        <th>Mentor</th>
        <th>Schedule</th>
    </thead>
    <tbody style="text-align: center">
      <tr>
        <input type="hidden" name="users_id" value="{{ auth()->user()->id }}"> 
        <input type="hidden" name="class_id" value="{{ $item->class_id }}">
        <td>{{ $item->id }}</td>
        <td>{{ $item->names }}</td>
        <td>{{ $item->mentor }}</td>
        <td >{{ $item->schedule }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endif

@endsection