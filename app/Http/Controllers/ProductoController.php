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

 //editar producto
 public function edit(Producto $producto)
{
     
    return view('productos.editarproducto', ['producto' => $producto]);
}

 public function update(Request $request, Producto $producto)
{
    $request->validate([
        'nombreProducto'      => 'required|string',
        'marcaProducto'       => 'required|string',
        'costo'               => 'required|numeric',
        'cantidad_disponible' => 'required|numeric',
    ]);

    $producto->update([
        'nombreProducto' => $request->input('nombreProducto'),
        'marcaProducto' => $request->input('marcaProducto'),
        'costo' => $request->input('costo'),
        'cantidad_disponible' => $request->input('cantidad_disponible'),
    ]);

    // Redirige a donde desees después de la actualización
    return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito');
}


}
