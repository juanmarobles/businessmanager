<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController; 


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
    return view('menu');
});

//CLIENTES
Route::get('/clientes', function () {
    return view('clientes');
})->name('clientes');

//CARGAR CLIENTES
Route::get('/cargar_cliente', function () {
    return view('cargarcliente');
})->name('cargarcliente');

Route::post('/cargarcliente', [ClienteController::class, 'crearCliente'])->name('crearcliente');

//VER CLIENTES
Route::get('/vercliente', [ClienteController::class, 'index'])->name('index');

 





