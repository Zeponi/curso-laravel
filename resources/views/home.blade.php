@extends('layout.principal')

@section('titulo','Home')

@section('navbar')
	@parent
	<p>nova navbar</p>
@endsection

@section('conteudo')
	<p>Aqui é o conteúdo da Home</p>
	@if(2 === 1)
		É igual
	@elseif(2>1)
		É maior
	@endif

	@for($i=0;$i<3;$i++)
		<br>
		Contando com o for {{$i}}
	@endfor

	@foreach($usuarios as $usuario)
		<p>Nome: {{ $usuario['nome'] }}</p>
	@endforeach

	@forelse($livros as $livro)
		{{ $livro['nome'] }}
	@empty
	<p>Sem registros</p>
	@endforelse

	<?php $i = 0; ?>
	@while($i<=4)
		<p>Esse é o While {{ $i++ }}</p>
	@endwhile
@endsection