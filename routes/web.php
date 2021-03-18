<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\UsuarioController;



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

Route::get('/', HomeController::class)->name('inicio');

Route::get('articulos', [ArticuloController::class, 'administrar'])->name('articulos.administrar');

Route::get('articulos/cargar', [ArticuloController::class, 'cargar'])->name('articulos.cargar');

Route::post('articulos', [ArticuloController::class, 'store'])->name('articulos.store');

Route::get('articulos/{articulo}/editar', [ArticuloController::class, 'editar'])->name('articulos.editar');

Route::put('articulos/{articulo}', [ArticuloController::class, 'actualizar'])->name('articulos.actualizar');

Route::put('articulos/{articulo}/eliminar', [ArticuloController::class, 'eliminar'])->name('articulos.eliminar');

Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos');

Route::get('comprar', [ArticuloController::class, 'mostrar'])->name('articulos.productos');

Route::get('usuario/registro', [UsuarioController::class, 'crear'])->name('usuario.crear');

Route::post('usuario/registro', [UsuarioController::class, 'store'])->name('usuario.store');

Route::get('usuario/login', [UsuarioController::class, 'login'])->name('usuario.login');

Route::post('usuario/login', [UsuarioController::class, 'log'])->name('usuario.log');

