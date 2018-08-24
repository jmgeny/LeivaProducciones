@extends('layouts.admin')

@section('title','Campeonatos')

@section('content')

		{{-- @include('navadmin') --}}

<section class="container">
	<section class="row">
		<section class="col-sm-12">
			<h2>
				Listado de Campeonatos
				<a href="{{ route('championship.create') }}" class="btn btn-primary pull-right">Nuevo</a>
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
					<th>Agregar Evento</th>
				</tr>	
			</thead>
			<tbody>
				@foreach($campeonatos as $campeonato)
				<tr>
					<td>{{$campeonato->nombre}}</td>
					{{-- <td>{{$campeonato->categoria->nombre}}</td> --}}
					<td>Categoria</td>
					{{-- <td>{{$campeonato->deporte->name}}</td> --}}
					<td>Deporte</td>
					<td>{{$campeonato->fecha_inicio}}</td>
					<td>{{$campeonato->fecha_fin}}</td>
					<td><a href="{{ route('championship.show', $campeonato->id) }}" class="btn btn-primary">ver</a></td>
					<td><a href=" {{ route('championship.edit', $campeonato->id) }}" class="btn btn-primary">Editar</a></td>
					<td><form action="{{ route('championship.destroy',$campeonato->id) }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-danger">Borrar</button>
						</form></td>
					<td><a href="{{ route('event.create') }}" class="btn btn-primary">Evento</a></td>
				</tr>
				@endforeach				
			</tbody>
		</table>
		
		</section>
	</section>
</section>
		
@endsection