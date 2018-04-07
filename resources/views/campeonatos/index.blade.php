@extends('layouts.crud')

@section('title', 'Listado Campeonatos')
@section('titulo', 'CRUD Campeonatos')

@section('content')
	<article class="col-sm-10">
		<h2>
			Listado de Campeonatos
			<a href="#" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		@include('eventos.codigo.info');

		<table class="table tabe-hover">
			<thead>
				<tr>
					<th>id</th>
					<th>Campeonato</th>
					<th>Fecha Inicio</th>
					<th>Fecha Fin</th>
					<th colspan="3" class="text-center">Controlles</th>
				</tr>
			</thead>
			<tbody>
				@foreach($campeonatos as $campeonato)
				<tr>
					<td>{{ $campeonato->id }}</td>
					<td>{{ $campeonato->nombre }}</td>
					<td>{{ $campeonato->fecha_inicio }}</td>
					<td>{{ $campeonato->fecha_fin }}</td>
					<td><a href="{{ route('campeonatos.show',$campeonato->id) }}">Ver</a></td>
					<td><a href="#">Editar</a></td>
					<td>
						<form action="#" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-link">Borrar</button>
						</form>
					</td>
				</tr>
				@endforeach				
			</tbody>
		</table>
	
	</article>
	
	<article class="col-sm-2 text-center">

		@include('eventos.codigo.aside');

	</article>

@endsection