@extends('layouts.general_layout')

@section('content')
  
  <form  action="{{route('update_task', $task['id'])}}" method="post">
    @csrf
    @method('POST')

    <label for="name">NAME</label>
    <input type="text" name="name" value="{{$task -> name}}"> <br>

    <label for="description">DESCRIPTION</label>
    <input type="text" name="description" value="{{$task -> description}}"> <br>

    <label for="deadline">DEADLINE</label>
    <input type="text" name="deadline" value="{{$task -> deadline}}"> <br>

    <label for="employee_id">EMPLOYEE</label>
    <select name="employee_id">
      @foreach ($employees as $employee)
        <option value="{{$employee -> id}}"

          @if ($employee -> id == $task -> employee_id)
            selected
          @endif

          >
          {{$employee -> name}} {{$employee -> lastname}}
        </option>
      @endforeach
    </select>

    <input type="submit" name="submit" value="UPDATE">


  </form>
@endsection
