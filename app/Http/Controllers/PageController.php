<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class PageController extends Controller
{
   
    public function home(Request $request){
        $search = $request->search;
        $clientes = Clientes::where('nombre', 'LIKE', "%$search%")
        ->with('user')
        ->latest()->paginate();
        return view('home', ['clientes' => $clientes]);
    }

    /**public function clientes(){
       
        return view('clientes');
    }

    public function cliente(Clientes $cliente){
        return view('cliente', ['cliente' => $cliente]);
    } comentado*/

     public function cliente( $clienteid){
        $cliente = Clientes::find($clienteid);
        return view('cliente', ['cliente' => $cliente]);
    }

    public function empresas(){
        return view('empresas');
    }
}
