<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticuloController;

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

Route::get('/', HomeController::class);

Route::get('articulos', [ArticuloController::class, 'administrar'])->name('articulos.administrar');

Route::get('articulos/cargar', [ArticuloController::class, 'cargar'])->name('articulos.cargar');

Route::post('articulos', [ArticuloController::class, 'store'])->name('articulos.store');

Route::get('articulos/modificar/{id}', [ArticuloController::class, 'modificar'])->name('articulos.modificar');