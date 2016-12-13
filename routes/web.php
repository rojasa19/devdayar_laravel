<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('task', 'TaskController');

/** Estas rutas son las normales
Route::get('task', 'TaskController@create');
Route::post('task', 'TaskController@create');
Route::delete('task/{id}', 'TaskController@delete');
*/
