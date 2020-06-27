<?php

namespace App\Http\Controllers;

use App\Task;
use App\Employee;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){

      $tasks = Task::all();

      return view('home', compact('tasks'));
    }

    public function edit($id){

      $task = Task::findOrfail($id);
      $employees = Employee::all();

      return view('edit_task', compact('task', 'employees'));
    }

    public function update(Request $request, $id){

      $validateData = $request -> validate([

        'name' => 'required',
        'description' => 'required',
        'deadline' => 'required',
        'employee_id' => 'required'
      ]);

      Task::whereId($id) -> update($validateData);

      return redirect() -> route('home');
    }

    
}
