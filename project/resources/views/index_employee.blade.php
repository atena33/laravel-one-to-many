@extends('layouts.general_layout')

@section('content')
  <h1>Tasks</h1>
  <ul>
    @foreach ($employees as $employee)
      <li>
        EMPLOYEE:
        {{$employee['name']}}
        {{$employee['lastname']}} 

        <br>
        {{-- EMPLOYEE:
        {{ $task -> employee -> name}}
        {{ $task -> employee -> lastname}}
        <br>
        <a href="{{route('edit_task', $task['id'])}}">EDIT</a>
        <br>-------------<br> --}}
      </li>

    @endforeach
  </ul>
@endsection
