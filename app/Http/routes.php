<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('aluno','Aluno\AlunoController@index');

Route::get('livro',['uses'=>'LivroController@index','as'=>'livro.index']);

Route::controller('produto','ProdutoController');

Route::get('home',function(){
	$usuario = "Guilherme";
	return view('home',compact('usuario'));
});