@extends('layouts.general_layout')

@section('content')
  <h1>Tasks</h1>
  <ul>
    @foreach ($tasks as $task)
      <li>
        {{$task['name']}}
        <small>
          <h6>EMPLOYEE:</h6>
          {{ $task -> employee -> firstname}}
        </small>
      </li>
    @endforeach
  </ul>
@endsection
