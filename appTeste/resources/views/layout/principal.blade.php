<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>
</head>
<body>
	<header>
		@section('navbar')
		@include('layout._includes._navbar')
		<p>Aqui vamos ter o NavBar</p>
		@show
		<hr>
	</header>
	<main>
		<div>
			@yield('conteudo')
		</div>
	</main>
	<footer>
		<hr>
		@section('footer')
		@include('layout._includes._footer')
		@show
	</footer>
</body>
</html>