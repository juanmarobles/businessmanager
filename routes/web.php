<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController; 
use App\Http\Controllers\ProductoController; 
use App\Http\Controllers\VentaController; 


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
//clientes
Route::prefix('clientes')->group(function () {
    //VISTA CLIENTES
    Route::get('/', function () {
        return view('cliente.clientes');
    })->name('clientes');

    //CARGAR CLIENTES
    Route::get('/cargar_cliente', function () {
        return view('cliente.cargarcliente');
    })->name('cargarcliente');

    Route::post('/cargarcliente', [ClienteController::class, 'crearCliente'])->name('crearcliente');

    //VER CLIENTES
    Route::get('/ver_cliente', [ClienteController::class, 'index'])->name('clientes.index');

    //ELIMINAR CLIENTES
    Route::delete('/ver_cliente{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

    
    // VISTA EDITAR CLIENTES
    Route::get('/ver_cliente/{cliente}', [ClienteController::class, 'edit'])->name('clientes.editar');


        
// EDITAR CLIENTES (actualización)
Route::put('/ver_cliente/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
});


//productos
Route::prefix('productos')->group(function () {
    //VISTA PRODUCTOS
    Route::get('/', function () {
        return view('productos.productos');
    })->name('productos');

    //CARGAR PRODUCTOS
    Route::get('/cargar_producto', function () {
        return view('productos.cargarproducto');
    })->name('cargarproducto');

    Route::post('/cargarproducto', [ProductoController::class, 'crearProducto'])->name('crearproducto');


     //VER PRODUCTOS
     Route::get('/ver_productos', [ProductoController::class, 'mostrarProductos'])->name('productos.index');

     //ELIMINAR PRODUCTOS
    Route::delete('/ver_productos{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');

     // VISTA EDITAR CLIENTES
     Route::get('/ver_productos/{producto}', [ProductoController::class, 'edit'])->name('productos.editar');

    // EDITAR Productos (actualización)
    Route::put('/ver_productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
    
});

//ventas
Route::prefix('ventas')->group(function(){
   Route::get('/', function () {
    return view('venta.vistaventas');
})->name('vistaventas');

//VISTA CARGAR VENTA
Route::get('/cargar_venta', function () {
    return view('venta.crearventa');
})->name('cargarventa');

Route::get('/crear_venta', [VentaController::class, 'mostrarClientesYProductos'])->name('ventas.index');
Route::post('/crear_venta', [VentaController::class, 'store'])->name('ventas.store');


});
 





