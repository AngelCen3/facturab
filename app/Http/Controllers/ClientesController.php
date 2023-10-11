<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        return view('clientes.index', [
            //hacemos una consulta a base de datos
            'clientes' => Clientes::latest()->paginate()
        ]);
    }
    //view create---Vista 
    public function create(Clientes $cliente)
    {
        return view('clientes.create', ['cliente' => $cliente]);
    }
    //Metodo guardar
    public function store(Request $request)
    {
        //Seccion de validacion
        $request -> validate([
            'nombre' => 'required',
            'correouno' => 'required|unique:clientes,correouno',  //Todo va junto
            'direccion' => 'required',
        ]);  //Para validar que se llenen los datos

        $cliente = $request->user()->clientes()->create([
            'nombre' => $request->nombre,
            'correouno' => $request->correouno,
            'direccion' => $request->direccion,
        ]);
        /**return redirect()->route('clientes.edit', $cliente);*/
        return redirect()->route('clientes.index');
    }

    public function edit(Clientes $cliente)
    {
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    //Metodo ACTUALIZAR
    public function update(Request $request, Clientes $cliente)
    {
        $request -> validate([
            'nombre' => 'required',
            //Todo va junto 
            'correouno' => 'required|unique:clientes,correouno,' . $cliente->id,  //Que no se repita he ignora con el registro que estoy trabajado
            'direccion' => 'required',
        ]);  //Para no permitir un formulario vacio

        $cliente->update([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
        ]);
        /**return redirect()->route('clientes.edit', $cliente);*/
        return redirect()->route('clientes.index');
    }
    public function destroy(Clientes $cliente)
    {
        $cliente->delete();
        return back();
    }
}
