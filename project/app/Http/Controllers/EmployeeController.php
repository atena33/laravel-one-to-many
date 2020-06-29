<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  public function index(){

    $employees= Employee::all();

    return view('index', compact('employees'));
  }

  public function show($id){

    $employee = Employee::findOrfail($id);

    return view('show_employee', compact('employee'));
  }

  public function edit($id){

    $employee = Employee::findOrfail($id);
    $locations = Location::all();

    return view('edit_employee', compact('employee', 'locations'));
  }

  public function update(Request $request, $id){


    $validateData = $request -> validate([

       'name' => 'required',
       'lastname' => 'required',
       'dateOfBirth' => 'required',
       'role' => 'required',
       'locations' => 'required'
     ]);


    $employee = Employee::findOrfail($id);

    $employee['name']  = $validateData['name'];
    $employee['lastname'] = $validateData['lastname'];
    $employee['dateOfBirth'] = $validateData['dateOfBirth'];
    $employee['role'] = $validateData['role'];
    $employee -> locations() -> sync($validateData['locations']);

    $employee -> save();

     return redirect() -> route('index_employees');
  }
}
