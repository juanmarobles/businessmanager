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
    return view('vercliente', ['clientes'=>$clientes]);
}

    //cargar clientes
    public function crearCliente(Request $request)
    {
        $request->validate([

            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'dni' => 'required|string',
        ]);

        $nuevoCliente = new Cliente();
        $nuevoCliente->nombre = $request->get('nombre');
        $nuevoCliente->apellido = $request->get('apellido');
        $nuevoCliente->dni = $request->get('dni');
        
        $nuevoCliente->save();

        return redirect()->route('clientes')->with('success', 'Cliente cargado con éxito');
    }


}
