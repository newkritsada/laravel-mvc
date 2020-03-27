<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route("todo.list");
});

// Route::get('/todo', function () {
//     return view('todo.list');
// });

Route::get('/todo', 'TodoController@all')->name("todo.list");
Route::get('/todo/create', 'TodoController@create')->name("todo.create");
Route::post('/todo/store', 'TodoController@store')->name("todo.store");
Route::get('/todo/edit/{id}', 'TodoController@edit')->name("todo.edit");
Route::put('/todo/update/{id}', 'TodoController@update')->name("todo.update");
Route::delete('/todo/delete/{id}', 'TodoController@destroy')->name("todo.destroy");
