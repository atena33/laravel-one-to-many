@extends('layouts.general_layout')

@section('content')

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{route('update_employee', $employee['id'])}}" method="post">



    @csrf
    @method('POST')

    <label for="name">NAME</label>
    <input type="text" name="name" value="{{$employee -> name}}"> <br>

    <label for="lastname">LASTNAME</label>
    <input type="text" name="lastname" value="{{$employee -> lastname}}"> <br>

    <label for="dateOfBirth">DATE OF BIRTH</label>
    <input type="text" name="dateOfBirth" value="{{$employee -> dateOfBirth}}"> <br>

    <label for="role">ROLE</label>
    <input type="text" name="role" value="{{$employee -> role}}"> <br>

    <label for="locations">LOCATIONS</label>
        @foreach ($locations as $location)
          <input type="checkbox" name="locations[]" value="{{$location['id']}}"
          @foreach ($employee -> locations as $employee_locations)
            @if ($location -> id == $employee_locations -> id)
              checked
            @endif
          @endforeach
          >
          {{$location['city']}}
        @endforeach

    <input type="submit" name="submit" value="UPDATE">
  </form>
@endsection
