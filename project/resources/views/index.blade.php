@extends('layouts.general_layout')

@section('content')

  @foreach ($employees as $employee)
    <ul>
      <li>
        <a href="{{route('show_employee', $employee['id'])}}">
        {{$employee['name']}} {{$employee['lastname']}}
        </a>
      </li>
    </ul>

  @endforeach

@endsection
