@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="panel panel-default">
				<ol class="breadcrumb panel-heading">
					<li><a href="{{ route('cliente.index') }}">Clientes</a></li>
					<li class="active">Adicionar</a></li>
				</ol>

				<div class="panel-body">
					<form action="{{ route('cliente.salvar') }}" method="post">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" name="nome" class="form-control" placeholder="Nome do Cliente">
						</div>
						<div class="form-group">
							<label for="email">E-mail</label>
							<input type="email" name="email" class="form-control" placeholder="Email do Cliente">
						</div>
						<div class="form-group">
							<label for="email">Endereço</label>
							<input type="text" name="endereco" class="form-control" placeholder="Endereço do Cliente">
						</div>
						<button class="btn btn-info">Adicionar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection