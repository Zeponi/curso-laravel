@extends('layout.principal')

@section('titulo','Home')

@section('navbar')
	@parent
	<p>nova navbar</p>
@endsection

@section('conteudo')
	<p>Aqui é o conteúdo da Home</p>
	<p>Usuário: {{ $usuario }}</p>
@endsection