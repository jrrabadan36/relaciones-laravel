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

use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;

Route::get('/autor', [AutorController::class, 'index']);
Route::get('/libro', [LibroController::class, 'index']);

// 1º Manera
Route::get('/libros-autor/{id}', [LibroController::class, 'librosAutor']);

// 2º Manera
Route::get('/autor-libros/{id}', [AutorController::class, 'autorLibros']);
