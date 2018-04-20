<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProdutoController extends Controller
{
    public function getIndex()
    {
        $produto = ["nome"=>"livro"];

    	return view('produto.index', compact('produto'));
    }
    public function getLista()
    {
    	return "lista de Produtos";
    }
    public function postLista()
    {
    	return "POST: lista de Produtos";
    }
}
