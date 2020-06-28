<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TaskController@index') -> name('home');
Route::get('/edit/{id}', 'TaskController@edit') -> name('edit_task');
Route::post('/update/{id}', 'TaskController@update') -> name('update_task');

Route::get('/index', 'EmployeeController@index') -> name('index_employees');
Route::get('/show/{id}', 'EmployeeController@show') -> name('show_employee');
Route::get('/edit/employee/{id}', 'EmployeeController@edit') -> name('edit_employee');
Route::post('/update/employee/{id}', 'EmployeeController@update') -> name('update_employee');
