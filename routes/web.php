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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/role/create', [App\Http\Controllers\RolesController::class, 'create']);
Route::post('/role', [App\Http\Controllers\RolesController::class, 'store']);
Route::get('/role', [App\Http\Controllers\RolesController::class, 'index']);
Route::get('/role/{role}/edit', [App\Http\Controllers\RolesController::class, 'edit']);
Route::patch('/role/{role}', [App\Http\Controllers\RolesController::class, 'update']);
Route::delete('/role/{role}', [App\Http\Controllers\RolesController::class, 'destroy']);

Route::get('/user/create', [App\Http\Controllers\UsersController::class, 'create']);
Route::post('/user', [App\Http\Controllers\UsersController::class, 'store']);
Route::get('/user', [App\Http\Controllers\UsersController::class, 'index']);
Route::get('/user/{user}/edit', [App\Http\Controllers\UsersController::class, 'edit']);
Route::patch('/user/{user}', [App\Http\Controllers\UsersController::class, 'update']);
Route::delete('/user/{user}', [App\Http\Controllers\UsersController::class, 'destroy']);


