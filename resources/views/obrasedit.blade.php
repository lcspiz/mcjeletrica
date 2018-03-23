@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 5px;
	}

</style>
<form action="{{route('obras.update',['id'=> $obra->id])}}" method="post">
<div class="panel panel-default">
	<div class="panel-heading">Editar Obras<button type="submit" class="btn btn-info pull-right">Atualizar</button>
        <div class="clearfix"></div>
    </div>
	<div class="form-group">
		{{ csrf_field() }}
	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">Empreendimento:</label>
			<input type="text" size= "40" name="empreendimento" class="form-control" value="{{$obra->empreendimento}}">
			&nbsp;
			<label for="nome">Construtora:</label>
			<input type="text" size="60" name="construtora" id="cnpj" class="form-control" value="{{$obra->construtora}}">
		</div>
	</div>
<p></p>
	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">Razão Social:</label>
			<input type="text" size="150" name="razao" class="form-control" value="{{$obra->razao}}">
		</div>
	</div>
<p></p>
	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">Inscrição Municipal:</label>
			<input type="text" size="50" name="insmunicipal" class="form-control" value="{{$obra->insmunicipal}}">
			&nbsp;
			<label for="nome">Inscrição Estadual:</label>
			<input type="text" size="50" name="insestadual"  class="form-control" value="{{$obra->insestadual}}">
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">CNPJ:</label>
			<input type="text" maxlength="20" size="20" name="cnpj" class="form-control" value="{{$obra->cnpj}}">
			&nbsp;
			<label for="nome">CEI:</label>
			<input type="text" maxlength="20" size="20" name="cei" class="form-control" value="{{$obra->cei}}">
			&nbsp;
			<label for="nome">Telefone:</label>
			<input type="text" maxlength="20" size="20" name="telefone" id="cep" class="form-control" value="{{$obra->telefone}}">
			&nbsp;
			<label for="nome">Contato:</label>
			<input type="text" maxlength="20" size="40" name="contato" class="form-control" value="{{$obra->contato}}">
		</div>
	</div>
<p></p>

</div>
<div class="panel-heading">Endereço de Faturamento</div>
	<div class="form-group">
		{{ csrf_field() }}
	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">Endereço:</label>
			<input type="text" size= "150" name="enderecofat" class="form-control" value="{{$obra->enderecofat}}">
		</div>
	</div>
<p></p>
	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">CEP:</label>
			<input type="text" size="30" name="cepfat" class="form-control" value="{{$obra->cepfat}}">
			&nbsp;
			<label for="nome">Cidade:</label>
			<input type="text" size="30" name="cidadefat"  class="form-control" value="{{$obra->cidadefat}}">
			&nbsp;
			<label for="nome">Bairro:</label>
			<input type="text" size="50" name="bairrofat" class="form-control" value="{{$obra->bairrofat}}">
		</div>
	</div>
<p></p>
</div>
<div class="panel-heading">Endereço Para Cobrança</div>
	<div class="form-group">
		{{ csrf_field() }}
	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">Endereço:</label>
			<input type="text" size= "150" name="enderecocob" class="form-control" value="{{$obra->enderecocob}}">
		</div>
	</div>
<p></p>
	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">CEP:</label>
			<input type="text" size="30" name="cepcob" class="form-control" value="{{$obra->cepcob}}">
			&nbsp;
			<label for="nome">Cidade:</label>
			<input type="text" size="30" name="cidadecob"  class="form-control" value="{{$obra->cidadecob}}">
			&nbsp;
			<label for="nome">Bairro:</label>
			<input type="text" size="50" name="bairrocob" class="form-control" value="{{$obra->bairrocob}}">
		</div>
	</div>
<p></p>
</div>
<div class="panel-heading">Endereço Para Entrega</div>
	<div class="form-group">
		{{ csrf_field() }}
	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">Endereço:</label>
			<input type="text" size= "150" name="enderecoent" class="form-control" value="{{$obra->enderecoent}}">
		</div>
	</div>
<p></p>
	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">CEP:</label>
			<input type="text" size="30" name="cepent" class="form-control" value="{{$obra->cepent}}">
			&nbsp;
			<label for="nome">Cidade:</label>
			<input type="text" size="30" name="cidadeent"  class="form-control" value="{{$obra->cidadeent}}">
			&nbsp;
			<label for="nome">Bairro:</label>
			<input type="text" size="50" name="bairroent" class="form-control" value="{{$obra->bairroent}}">
		</div>
	</div>
<p></p>
</div>
</div>
</form>
@stop