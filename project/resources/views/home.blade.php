@extends('layouts.general_layout')

@section('content')
  <h1>Tasks</h1>
  <ul>
    @foreach ($tasks as $task)
      <li>
        TASK:
        {{$task['name']}} <br>
        EMPLOYEE:
        {{ $task -> employee -> name}}
        {{ $task -> employee -> lastname}}
        <br>
        <a href="{{route('edit_task', $task['id'])}}">EDIT</a>
        <br>-------------<br>
      </li>

    @endforeach
  </ul>
@endsection
