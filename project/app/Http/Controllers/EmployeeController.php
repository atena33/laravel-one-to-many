<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Task;
use App\Location;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  public function show($id){

    $employee = Employee::findOrfail($id);

    return view('show_employee', compact('employee'));
  }

  public function edit($id){

    $employee = Employee::findOrfail($id);
    $tasks = Task::all();
    $locations = Location::all();

    return view('edit_employee', compact('employee', 'tasks', 'locations'));
  }

  public function update(Request $request, $id){

     
  }



}
