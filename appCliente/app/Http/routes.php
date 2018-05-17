<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/cliente', ['uses'=>'ClienteController@index', 'as' =>'cliente.index']);
Route::get('/cliente/adicionar', ['uses'=>'ClienteController@adicionar', 'as' =>'cliente.adicionar']);
Route::post('/cliente/salvar', ['uses'=>'ClienteController@salvar', 'as' =>'cliente.salvar']);
Route::get('/cliente/editar/{id}', ['uses'=>'ClienteController@editar', 'as' =>'cliente.editar']);
Route::put('/cliente/atualizar/{id}', ['uses'=>'ClienteController@atualizar', 'as' =>'cliente.atualizar']);
