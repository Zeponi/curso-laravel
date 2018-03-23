<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('contato', function(){
    return "Página de Contato!";
});

Route::post('contato', function(){
    return "Realizando um post";
});

Route::put('contato', function(){
    return "Realizando um put";
});

Route::delete('contato', function(){
    return "Realizando um delete";
});

Route::match(['get', 'post'], 'sobre',function(){
    return "Trabalhando com Match";
});

Route::any('todos',function(){
    $url = url('nova');
    return "Todos ".$url;
});

Route::get('artigo/{id}', function($id){
    return "Artigo id: {$id}";
});

Route::get('produto/{id?}', function($id = "marijuana"){
    return "Produto id: {$id}";
});

Route::get('produto/{id?}/cor/{cor?}', function($id = "42",$cor = "verde"){
    return "Produto id: {$id} e Cor = {$cor}";
});

Route::get('link',['as'=>'link',function(){
    return 'Link <a href="'.route('detalhes').'">Detalhe</a>';
}]);

Route::get('teste',['as'=>'detalhes',function(){
    return "teste";
}]);

Route::group(['prefix'=>'admin'], function(){
    Route::get('contato', function(){
        return "Página de Contato no Admin!";
    });
});
