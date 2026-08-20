<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductoController;

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
    return view('inicio');
})->name('inicio');


// rutas login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);


// rutas registro
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [LoginController::class, 'register']);


// ruta cerrar seccion
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// rutas saludo
Route::get('/saludo', function () {
    return view('saludo');
})->middleware('auth')->name('saludo');


// rutas pedidos
Route::get('/pedidos', function () {
    return view('pedidos');
});


// rutas contactos
Route::get('/contactos', function () {
    return view('contactos');
});


// rutas productos
Route::get('/productos', [ProductoController::class, 'index']);

Route::get('/productos/nuevo', [ProductoController::class, 'create']);

Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit']);

Route::put('/productos/{producto}', [ProductoController::class, 'update']);

Route::post('/productos', [ProductoController::class, 'store']);


// rutas ventas
Route::get('/ventas', function () {
    return view('ventas');
});