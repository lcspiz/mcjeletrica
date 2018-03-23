@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 30px;
	}
	.panel-heading h3 {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: normal;
    width: 80%;
    padding-top: 8px;
}	
</style>

<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Manutenção de Fornecedores</h3>
	 <a href="{{route('fornecedor.create')}}" type="button" class="btn btn-success pull-right">Novo Fornecedor</a>
        <div class="clearfix"></div>
    </div>
<p></p>

<form class="form-inline" action="{{route('fornecedor.pesquisa')}}" style="float:left;">
		<label for="nome">Código:</label>
		<input type="numeric" class="form-control" type="submit" name="codigo">
		<button type="submit" class="btn btn-btn-success">Pesquisar</button>
		&nbsp;
</form>

		<div class="panel-body">

			<table class="table table-hover">
				
					<thead>
						<th>
							Código
						</th>

						<th>
							Razão Social
						</th>

						<th>
							CNPJ/CPF
						</th>

						<th>
							Cidade
						</th>

						<th>
							Editar
						</th>

						<th>
							Excluir
						</th>


					</thead>

					<tbody>
						@foreach($fornecedores as $fornecedor)
							<tr>
								<td>
								{{$fornecedor->id}}
								</td>
								<td>
									{{$fornecedor->nome}}
								</td>

								<td>
									{{$fornecedor->cnpj}}
								</td>
								<td>
									{{$fornecedor->cidade}}
								</td>

								<td>
									<a href="{{route('fornecedor.edit',['id'=> $fornecedor->id])}}" class="btn btn-xs btn-success">Editar</a>
								</td>

								<td>
									<a href="{{route('fornecedor.delete',['id'=> $fornecedor->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Deseja excluir fornecedor: {{$fornecedor->nome}}')">Excluir</a>
								</td>

							</tr>

						@endforeach

					</tbody>
				</table>
			
		</div>
		
	</div>
</div>


@stop

