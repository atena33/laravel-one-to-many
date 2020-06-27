<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TaskController@index') -> name('home');
Route::get('/edit{id}', 'TaskController@edit') -> name('edit_task');
Route::post('/update{id}', 'TaskController@update') -> name('update_task');

Route::get('/show{id}', 'EmployeeController@show') -> name('show_employee');
Route::get('/edit_employee{id}', 'EmployeeController@edit') -> name('edit_employee');
Route::post('/update_employee{id}', 'EmployeeController@update') -> name('update_employee');
