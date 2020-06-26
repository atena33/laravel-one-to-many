<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Task;
use App\Location;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  public function index(){

    $employees = Employee::all();
    return view('home', compact('employees'));
  }

}
