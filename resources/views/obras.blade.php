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
					Manutenção de Obras</h3>
	 <a href="{{route('obras.create')}}" type="button" class="btn btn-success pull-right">Nova Obra</a>
        <div class="clearfix"></div>
    </div>
<p></p>

<form class="form-inline" action="{{route('obras.pesquisa')}}" style="float:left;">
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
							Empreendimento
						</th>

						<th>
							Construtora
						</th>

						<th>
							Editar
						</th>

						<th>
							Excluir
						</th>


					</thead>

					<tbody>
						@foreach($obras as $obra)
							<tr>
								<td>
								{{$obra->id}}
								</td>
								<td>
									{{$obra->empreendimento}}
								</td>

								<td>
									{{$obra->construtora}}
								</td>

								<td>
									<a href="{{route('obras.edit',['id'=> $obra->id])}}" class="btn btn-xs btn-success">Editar</a>
								</td>

								<td>
									<a href="{{route('obras.delete',['id'=> $obra->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Deseja excluir obra? ')">Excluir</a>
								</td>

							</tr>

						@endforeach

					</tbody>
				</table>
			
		</div>
		
	</div>
</div>


@stop

