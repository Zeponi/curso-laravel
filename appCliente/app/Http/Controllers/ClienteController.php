<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cliente;

class ClienteController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
    	$clientes = Cliente::paginate(10);
    	
    	return view('cliente.index', compact('clientes'));
    }

    public function adicionar() {
    	return view('cliente.adicionar');
    }

    public function salvar(Request $request) {
    	Cliente::create($request->all());
        \Session::flash('flash_message',[
            'msg'=>"Cliente Adicionado com Sucesso!",
            'class'=>"alert-success"
        ]);
        return redirect()->route('cliente.adicionar');
    }

    public function editar($id) {
        $cliente = Cliente::find($id);
        if(!$cliente) {
            \Session::flash('flash_message',[
                'msg'=>"Não existe esse cliente cadastrado! Deseja cadastrar um novo cliente?",
                'class'=>"alert-danger"
            ]);
            return redirect()->route('cliente.adicionar');
        }

        return view('cliente.editar',compact('cliente'));
    }

    public function atualizar(Request $request,$id) {

        $cliente = Cliente::find($id)->update($request->all());
        
        \Session::flash('flash_message',[
            'msg'=>"Cliente atualizado com sucesso!",
            'class'=>"alert-success"
        ]);
        return redirect()->route('cliente.index');
    }

}
