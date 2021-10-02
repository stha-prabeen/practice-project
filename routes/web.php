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
    return view('welcome');
});
Route::get('/todo',[App\Http\Controllers\TodoController::class,'index']);
Route::get('/add_todo',[App\Http\Controllers\TodoController::class,'addTodo']);
Route::post('/store_todo',[App\Http\Controllers\TodoController::class,'storeTodo']);
Route::post('/delete-todo/{idtodelete}',[App\Http\Controllers\TodoController::class,'deleteTodo']);

//Route::get('/edit/id',[App\Http\Controllers\TodoController::class,'edit']);
//Route::post('/edit/id',[App\Http\Controllers\TodoController::class,'update']);

//Route::resource('resource',[App\Https\Controller\ResourceController::class]);
//Route::get('/resource')