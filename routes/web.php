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
//Route::get('/demohome', [App\Http\Controllers\HomeController::class, 'index'])->name('demohome');


Route::get('/roles/create', [App\Http\Controllers\RolesController::class, 'create']);
Route::post('/roles', [App\Http\Controllers\RolesController::class, 'store']);
Route::get('/roles', [App\Http\Controllers\RolesController::class, 'index'])->name('roles.index');
Route::get('/roles/{role}/edit', [App\Http\Controllers\RolesController::class, 'edit']);
Route::patch('/roles/{role}', [App\Http\Controllers\RolesController::class, 'update']);
Route::delete('/roles/{role}', [App\Http\Controllers\RolesController::class, 'destroy']);

Route::get('/users/create', [App\Http\Controllers\UsersController::class, 'create']);
Route::post('/users', [App\Http\Controllers\UsersController::class, 'store']);
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users.index');
Route::get('/users/{user}/edit', [App\Http\Controllers\UsersController::class, 'edit']);
Route::patch('/users/{user}', [App\Http\Controllers\UsersController::class, 'update']);
Route::delete('/users/{user}', [App\Http\Controllers\UsersController::class, 'destroy']);

Route::get('/brands/create', [App\Http\Controllers\BrandsController::class, 'create']);
Route::post('/brands', [App\Http\Controllers\BrandsController::class, 'store']);
Route::get('/brands', [App\Http\Controllers\BrandsController::class, 'index'])->name('brands.index');
Route::get('/brands/{brand}/edit', [App\Http\Controllers\BrandsController::class, 'edit']);
Route::patch('/brands/{brand}', [App\Http\Controllers\BrandsController::class, 'update']);
Route::delete('/brands/{brand}', [App\Http\Controllers\BrandsController::class, 'destroy']);

Route::get('/models/create', [App\Http\Controllers\ModelsController::class, 'create']);
Route::post('/models', [App\Http\Controllers\ModelsController::class, 'store']);
Route::get('/models', [App\Http\Controllers\ModelsController::class, 'index'])->name('models.index');
Route::get('/models/{model}/edit', [App\Http\Controllers\ModelsController::class, 'edit']);
Route::patch('/models/{model}', [App\Http\Controllers\ModelsController::class, 'update']);
Route::delete('/models/{model}', [App\Http\Controllers\ModelsController::class, 'destroy']);

Route::get('/cars/create', [App\Http\Controllers\CarsController::class, 'create']);
Route::post('/cars', [App\Http\Controllers\CarsController::class, 'store']);
Route::get('/cars', [App\Http\Controllers\CarsController::class, 'index'])->name('cars.index');
Route::get('/cars/{car}/edit', [App\Http\Controllers\CarsController::class, 'edit']);
Route::patch('/cars/{car}', [App\Http\Controllers\CarsController::class, 'update']);
Route::delete('/cars/{car}', [App\Http\Controllers\CarsController::class, 'destroy']);
