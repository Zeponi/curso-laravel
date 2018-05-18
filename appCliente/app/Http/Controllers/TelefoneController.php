<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cliente;
use App\Telefone;

class TelefoneController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    }

    public function adicionar($id) {
    	$cliente = Cliente::find($id);
    	return view('telefone.adicionar',compact('cliente'));
    }

    public function salvar(Request $request,$id) {
    	$telefone = new Telefone;
    	$telefone->titulo = $request->input('titulo');
    	$telefone->telefone = $request->input('telefone');

    	Cliente::find($id)->addTelefone($telefone);

    	\Session::flash('flash_message',[
            'msg'=>"Telefone Adicionado com Sucesso!",
            'class'=>"alert-success"
        ]);
        return redirect()->route('cliente.detalhe',$id);
    }
}
