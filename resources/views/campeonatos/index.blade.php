@extends('layouts.crud')

@section('title', 'Listado Campeonatos')
@section('titulo', 'CRUD Campeonatos')

@section('content')
	<article class="col-sm-10">
		<h2>
			Listado de Campeonatos
			<a href="{{ route('editCampeonatos.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('eventos.codigo.info')
		<table class="table">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Categoria</th>
					<th>Deporte</th>
					<th>Inicio</th>
					<th>Fin</th>
					<th>Ver</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>	
			</thead>
			<tbody>
				@foreach($campeonatos as $campeonato)
				<tr>
					<td>{{$campeonato->nombre}}</td>
					<td>{{$campeonato->categoria_id}}</td>
					<td>{{$campeonato->deporte_id}}</td>
					<td>{{$campeonato->fecha_inicio}}</td>
					<td>{{$campeonato->fecha_fin}}</td>
					<td><a href="{{ route('editCampeonatos.show', $campeonato->id) }}" class="btn btn-primary">ver</a></td>
					<td><a href=" {{ route('editCampeonatos.edit', $campeonato->id) }}" class="btn btn-primary">Editar</a></td>
					<td><form action="{{ route('editCampeonatos.destroy',$campeonato->id) }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-danger">Borrar</button>
						</form></td>
				</tr>
				@endforeach				
			</tbody>
		</table>		
	</article>
	<article class="col-sm-2">
		@include('eventos.codigo.aside')
	</article>
@endsection


{{-- @extends('layouts.crud')

@section('title', 'Listado Campeonatos')
@section('titulo', 'CRUD Campeonatos')

@section('content')
	<article class="col-sm-10">
		<h2>
			Listado de Campeonatos
			<a href="{{ route('campeonatos.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		@include('eventos.codigo.info')

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
					<td><a href="{{ route('campeonatos.edit', $campeonato->id) }}">Editar</a></td>
					<td>
						<form action="{{ route('campeonatos.destroy',$campeonato->id) }}" method="POST">
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

@endsection --}}