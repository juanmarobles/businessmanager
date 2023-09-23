<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    
    
    public function mostrarClientesYProductos()
    {
        $clientes = Cliente::all();
        $productos = Producto::all();
        
        return view('venta.crearventa', ['clientes' => $clientes, 'productos' => $productos]);
    }
    

    

public function store(Request $request)
{
    $request->validate([
        'fecha_venta' => 'required|date',
        'total' => 'required|numeric',
        'cliente_id' => 'required|exists:clientes,idCliente',
        'producto' => 'required|numeric', // Agregar validación para producto
        'cantidad' => 'required|numeric', // Agregar validación para cantidad
    ]);

    $venta = new Venta([
        'fecha_venta' => $request->input('fecha_venta'),
        'total' => $request->input('total'),
        'cliente_id' => $request->input('cliente_id'),
    ]);

    $venta->save();

    // Aquí puedes guardar los detalles de los productos vendidos
    $productoVendido = new ProductoVendido([
        'producto_id' => $request->input('producto'), // Obtener el ID del producto vendido
        'cantidad' => $request->input('cantidad'), // Obtener la cantidad vendida
    ]);

    $venta->productos()->save($productoVendido);

    return redirect()->route('ventas.index')->with('success', 'Venta creada con éxito');
}


}
