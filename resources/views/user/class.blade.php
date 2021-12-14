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
        <form action="/user/addClass" method="POST">
            @csrf
        <input type="hidden" name="users_id" value="{{ auth()->user()->id }}">
        <input type="hidden" name="course_id" value="{{ $item->course_id }}">
        <input type="hidden" name="class_id" value="{{ $item->id }}">
        <th>{{ $item->id }}</th>
        <td>{{ $item->names }}</td>
        <td>{{ $item->mentor }}</td>
        <td >{{ $item->schedule }}</td>
      </tr>
      <tr>
          <td colspan="4"><button type="submit" class="btn btn-primary" style="float: left">Enroll Class</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
<a href="/user/course"><button class="btn btn-outline-primary">back to course</button></a>
@endsection