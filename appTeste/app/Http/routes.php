<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('aluno','Aluno\AlunoController@index');

Route::get('livro',['uses'=>'LivroController@index','as'=>'livro.index']);

Route::controller('produto','ProdutoController');

Route::get('home',function(){
	$usuarios = array(
		["nome" => "Gustavo"],
		["nome" => "Ana"],
		["nome" => "Camila"],
		["nome" => "Pedro"],
	);
	$livros = [];
	return view('home',compact('usuarios', 'livros'));
});

Route::get('usuario', ['uses'=>'UsuarioController@index','as'=>'usuario']);