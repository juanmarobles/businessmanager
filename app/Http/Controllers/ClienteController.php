<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    //mostrar clientes
    public function index()
    {
    $clientes = Cliente::all();
    //dd($clientes);
    return view('cliente.vercliente', ['clientes'=>$clientes]);
    }

    //cargar clientes
    public function crearCliente(Request $request)
    {
        $request->validate([

            'nombre'   => 'required|string',
            'apellido' => 'required|string',
            'dni'      => 'required|string',
        ]);

        $nuevoCliente = new Cliente();
        $nuevoCliente->nombre = $request    ->get('nombre');
        $nuevoCliente->apellido = $request  ->get('apellido');
        $nuevoCliente->dni = $request       ->get('dni');
        
        $nuevoCliente->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente cargado con éxito');
    }

   
    //borrar clientes
    public function destroy(Cliente $cliente)
    {

        $cliente->delete();

        return back();
    }

    //editar clientes
    public function edit(Cliente $cliente)
    {

        return view('cliente.editarcliente',['cliente'=> $cliente]);
    }

    public function update(Request $request, Cliente $cliente)
{
    $request->validate([
        'nombre' => 'required|string',
        'apellido' => 'required|string',
        'dni' => 'required|string',
    ]);

    $cliente->update([
        'nombre' => $request->input('nombre'),
        'apellido' => $request->input('apellido'),
        'dni' => $request->input('dni'),
    ]);

    // Redirige a donde desees después de la actualización
    return redirect()->route('clientes.index')->with('success', 'Cliente actualizado con éxito');
}


}
