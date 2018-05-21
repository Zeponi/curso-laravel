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

    public function salvar(\App\Http\Requests\TelefoneRequest $request,$id) {
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

    public function editar($id) {
        $telefone = Telefone::find($id);
        if(!$telefone) {
            \Session::flash('flash_message',[
                'msg'=>"Não existe telefone cadastrado! Deseja cadastrar um novo cliente?",
                'class'=>"alert-danger"
            ]);
            return redirect()->route('cliente.detalhe',$telefone->cliente->id);
        }

        return view('telefone.editar',compact('telefone'));
    }

    public function atualizar(Request $request,$id)
    {
        $telefone = Telefone::find($id);
        $telefone->update($request->all());
        
        \Session::flash('flash_message',[
            'msg'=>"Telefone atualizado com Sucesso!",
            'class'=>"alert-success"
        ]);

        return redirect()->route('cliente.detalhe',$telefone->cliente->id);        
        
    }

    public function deletar($id) {
        $telefone = Telefone::find($id);

        $telefone->delete();

        \Session::flash('flash_message',[
            'msg'=>"Telefone deletado com Sucesso!",
            'class'=>"alert-success"
        ]);
        return redirect()->route('cliente.detalhe',$telefone->cliente->id);
    }
}
