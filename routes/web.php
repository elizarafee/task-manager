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



Route::delete('/tasks/{task_id}', 'TaskController@delete');

Route::put('/tasks/{task_id}/completed', 'TaskController@completed');

Route::put('/tasks', 'TaskController@update');

Route::get('/tasks/{task_id}/edit', 'TaskController@edit');

Route::get('/tasks/create', 'TaskController@create');

Route::post('/tasks', 'TaskController@store');

Route::get('/tasks', 'TaskController@index');

Route::get('/', 'TaskController@index');
