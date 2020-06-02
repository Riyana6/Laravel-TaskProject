<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    $data=App\Task::all();
    return view('task')->with('tasks',$data);
});

Route::post('/saveTask', 'TaskController@store');

Route::get('/markascompleted/{id}','TaskController@UpdateTaskAsCompleted');

Route::get('/markasnotcompleted/{id}','TaskController@UpdateTaskAsNotCompleted');

Route::get('/deletetask/{id}','TaskController@DeleteTask');

Route::get('/updatetask/{id}','TaskController@UpdateTaskView');

Route::post('/updatetasks','TaskController@UpdateTask');