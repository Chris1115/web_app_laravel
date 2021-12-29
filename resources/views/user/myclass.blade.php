@extends('layouts/user')

@section('style')

@endsection

@section('content')
@if ($classdtl == NUll)
    <h1>No Class, yet</h1>
@else
@foreach ($classdtl as $item)
<table class="table table-bordered">
    <thead style="text-align: center">
        <td>Id</td>
        <td>Name</td>
        <td>Mentor</td>
        <td>Schedule</td>
    </thead>
    <tbody style="text-align: center">
      <tr>
        <input type="hidden" name="users_id" value="{{ auth()->user()->id }}"> 
        <input type="hidden" name="class_id" value="{{ $item->class_id }}">
        <th>{{ $item->id }}</th>
        <th>{{ $item->names }}</th>
        <td>{{ $item->mentor }}</td>
        <td >{{ $item->schedule }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endif

@endsection