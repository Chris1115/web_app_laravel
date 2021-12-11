@extends('layouts/user')

@section('style')

@endsection

@section('content')
@foreach ($classdtl as $item)
<table class="table table-bordered">
    <thead style="text-align: center">
        <td>Group</td>
        <td>Class</td>
        <td>Mentor</td>
        <td>Schedule</td>
    </thead>
    <tbody style="text-align: center">
      <tr>
        <input type="hidden" name="course_id" value="{{ $item->course_id }}">
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <input type="hidden" name="name" value="{{ $item->name }}">
        <input type="hidden" name="mentor" value="{{ $item->mentor }}">
        <input type="hidden" name="schedule" value="{{ $item->schedule }}">
        <th>{{ $item->id }}</th>
        <td>{{ $item->name }}</td>
        <td>{{ $item->mentor }}</td>
        <td >{{ $item->schedule }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection