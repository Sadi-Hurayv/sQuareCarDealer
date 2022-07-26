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


Route::get('/roles/create', [App\Http\Controllers\RolesController::class, 'create']);
Route::post('/roles', [App\Http\Controllers\RolesController::class, 'store']);
Route::get('/roles', [App\Http\Controllers\RolesController::class, 'index']);
Route::get('/roles/{role}/edit', [App\Http\Controllers\RolesController::class, 'edit']);
Route::patch('/roles/{role}', [App\Http\Controllers\RolesController::class, 'update']);
Route::delete('/roles/{role}', [App\Http\Controllers\RolesController::class, 'destroy']);

Route::get('/users/create', [App\Http\Controllers\UsersController::class, 'create']);
Route::post('/users', [App\Http\Controllers\UsersController::class, 'store']);
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index']);
Route::get('/users/{user}/edit', [App\Http\Controllers\UsersController::class, 'edit']);
Route::patch('/users/{user}', [App\Http\Controllers\UsersController::class, 'update']);
Route::delete('/users/{user}', [App\Http\Controllers\UsersController::class, 'destroy']);


