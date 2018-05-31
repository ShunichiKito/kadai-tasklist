<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController');

// CRUD
// Route::get('tasks/{id}', 'tasksController@show');
// Route::post('tasks', 'tasksController@store');
// Route::put('tasks/{id}', 'tasksController@update');
// Route::delete('tasks/{id}', 'tasksController@destroy');

// // index:  show's Auxiliary Page
// // Route::get('tasks', 'tasksController@index');

// // create:   Form page for new creation
// Route::get('tasks/create', 'tasksController@create');

// // edit:   Form page for update
// Route::get('tasks/{id}/edit', 'tasksController@edit');