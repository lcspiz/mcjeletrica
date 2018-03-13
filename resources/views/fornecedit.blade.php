@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 5px;
	}

</style>
<form action="{{route('fornecedor.update',['id'=> $fornecedor->id])}}" method="post">
	<div class="panel panel-default">
	<div class="panel-heading">Editar de Fornecedor: {{$fornecedor->nome}}</div>
	<div class="form-group">
		{{ csrf_field() }}

	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">Id:</label>
			<input type="text" name="id" class="form-control" size="5" value="{{$fornecedor->id}}" readonly>
			&nbsp;
			<label for="nome">Razão Social:</label>
			<input type="text" name="nome" class="form-control" value="{{$fornecedor->nome}}">
			&nbsp;
			<label for="nome">CNPJ:</label>
			<input type="text" maxlength="14" size="18" name="cnpj" id="cnpj" class="form-control" value="{{$fornecedor->cnpj}}">
		</div>
	</div>
<p></p>
	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">Inscrição Municipal:</label>
			<input type="text" size="20" name="insmunicipal" class="form-control"  value="{{$fornecedor->insmunicipal}}">
			&nbsp;
			<label for="nome">Inscrição Estadual:</label>
			<input type="text" size="20" name="insestadual"  class="form-control"  value="{{$fornecedor->insestadual}}">

		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Endereço:</label>
			<input type="text" maxlength="40" size="20" name="endereco" class="form-control"  value="{{$fornecedor->endereco}}" >
			&nbsp;
			<label for="nome">Numero:</label>
			<input type="text" maxlength="10" size="10" name="numero" class="form-control" value="{{$fornecedor->numero}}">
			&nbsp;
			<label for="nome">CEP:</label>
			<input type="text" maxlength="9" size="9" name="cep" id="cep" class="form-control" value="{{$fornecedor->cep}}">
			&nbsp;
			<label for="nome">Complemento:</label>
			<input type="text" maxlength="20" size="10" name="complemento" class="form-control" value="{{$fornecedor->complemento}}">
			&nbsp;
			<label for="nome">Bairro:</label>
			<input type="text" maxlength="30" size="20" name="bairro" class="form-control" value="{{$fornecedor->bairro}}">
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Cidade:</label>
			<input type="text" size="15" name="cidade" class="form-control" value="{{$fornecedor->cidade}}">
			<label for="nome">Contato:</label>
			<input type="text" maxlength="30" size="20" name="contato" class="form-control" value="{{$fornecedor->contato}}">
			&nbsp;
			<label for="nome">Telefone:</label>
			<input type="text" maxlength="15" size="15" name="telefone" id="telefone" class="form-control" value="{{$fornecedor->telefone}}">
		</div>
		<p></p>
		<button type="submit" class="btn btn-primary btn-sm col-md-1 col-md-offset-5">Editar</button>
	</div>
<p></p>

</div>

</form>
@stop