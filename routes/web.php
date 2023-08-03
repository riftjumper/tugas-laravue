<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create']);
Route::post('/product', [App\Http\Controllers\ProductController::class, 'store']);
Route::get('/product/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit']);
Route::put('/product/{product}', [App\Http\Controllers\ProductController::class, 'update']);
Route::delete('/product/{product}', [App\Http\Controllers\ProductController::class, 'destroy']);


Route::get('/transaction', [App\Http\Controllers\TransactionController::class, 'index']);
Route::get('/transaction/create', [App\Http\Controllers\TransactionController::class, 'create']);

Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create']);
Route::get('/user/{user}/edit', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/user', [App\Http\Controllers\UserController::class, 'store']);
Route::put('/user/{user}', [App\Http\Controllers\UserController::class, 'update']);
Route::delete('/user/{user}', [App\Http\Controllers\UserController::class, 'destroy']);
