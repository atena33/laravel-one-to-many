@extends('layouts.general_layout')

@section('content')
  <h1>EMPLOYEE</h1>
  <a href = "{{route('edit_employee', $employee['id'])}}"> EDIT DATA</a>
  <ul>
    <li>
      <h2>PERSONAL DATA: </h2>
      NAME: {{$employee['name']}} <br>
      LASTNAME: {{$employee['lastname']}}  <br>
      DATE OF BIRTH: {{$employee['dateOfBirth']}} <br>
      ROLE: {{$employee['role']}} <br>
    </li>
    <li>
      <h2>TASKS: </h2>
      @foreach ($employee -> tasks as $task) <br>
        NAME: {{$task -> name}} <br>
        DESCRIPTION: {{$task-> description}} <br>
        DEADLINE: {{$task -> deadline}} <br>
      @endforeach
      </li>
      <li>
      <h2>LOCATIONS </h2>
        @foreach ($employee -> locations as $location) <br>
          ADDRESS: {{$location -> street}} <br>
          CITY: {{$location -> city}} <br>
          STATE: {{$location -> state}} <br>
        @endforeach
      </li>
    </ul>
@endsection
