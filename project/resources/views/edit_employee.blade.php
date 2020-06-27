@extends('layouts.general_layout')

@section('content')

  <form action="{{route('update_employee', $employee['id'])}}" method="post">
    @csrf
    @method('POST')

    <label for="name">NAME</label>
    <input type="text" name="name" value="{{$employee -> name}}"> <br>

    <label for="lastname">LASTNAME</label>
    <input type="text" name="lastname" value="{{$employee -> lastname}}"> <br>

    <label for="dateOfBirth">DATE OF BIRTH</label>
    <input type="text" name="dateOfBirth" value="{{$employee -> dateOfBirth}}"> <br>

    <label for="tasks">TASKS</label>

      @foreach ($tasks as $task)
        <input type="checkbox" name="tasks[]" value="{{$task['id']}}"
          @foreach ($employee -> tasks as $employee_tasks)
            @if ($task -> id == $employee_tasks -> id)
            checked
            @endif
          @endforeach
      @endforeach
        >

    <label for="locations">LOCATIONS</label>
        @foreach ($locations as $location)
          <input type="checkbox" name="locations[]" value="{{$location['id']}}"
          @foreach ($employee -> locations as $employee_locations)
            @if ($location -> id == $employee_locations -> id)
              checked
            @endif
          @endforeach
        @endforeach
          >
    <input type="submit" name="submit" value="UPDATE">


  </form>
@endsection
