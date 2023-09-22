<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    //mostrar productos
    public function mostrarProductos()
{
    $productos = Producto::all();
    //dd($productos);
    return view('productos.verproductos', ['productos'=>$productos]);
}

public function crearProducto(Request $request)
{
    $request->validate([
        'nombreProducto'      => 'required|string',
        'marcaProducto'       => 'required|string',
        'costo'               => 'required|numeric',
        'cantidad_disponible' => 'required|numeric',
    ]);

    $nuevoProducto = new Producto();
    $nuevoProducto->nombreProducto = $request->input('nombreProducto');
    $nuevoProducto->marcaProducto = $request->input('marcaProducto');
    $nuevoProducto->costo = $request->input('costo');
    $nuevoProducto->cantidad_disponible = $request->input('cantidad_disponible');

    $nuevoProducto->save();

    return redirect()->route('productos.index')->with('success', 'Producto cargado con éxito');
}

public function destroy(Producto $producto)
{
    $producto->delete();
   
    return back();
}

}
