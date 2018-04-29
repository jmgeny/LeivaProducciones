@extends('layouts.crud')

@section('title', 'Listado Eventos')
@section('titulo', 'CRUD Eventos')

@section('content')
	<article class="col-sm-10">
		<h2>
			Listado de Evento
			<a href="{{ route('editEventos.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
			@include('eventos.codigo.info')
		<table class="table">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Fecha</th>
					<th>Ciudad</th>
					<th>Deporte</th>
					<th>ver</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>	
			</thead>
			<tbody>
				@foreach($eventos as $evento)
				<tr>
					<td>{{$evento->nombre}}</td>
					<td>{{$evento->fecha}}</td>
					<td>{{$evento->ciudad->name}}</td>
					{{-- {{ dd($evento->ciudad->name)}} --}}
					<td>{{$evento->deporte->nombre}}</td>
					<td><a href="{{ route('editEventos.show', $evento->id) }}" class="btn btn-primary">ver</a></td>
					<td><a href=" {{ route('editEventos.edit', $evento->id) }}" class="btn btn-primary">Editar</a></td>
					<td><form action="{{ route('editEventos.destroy',$evento->id) }}" method="POST">
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

{{-- 				<div class="col-sm-4">
					<div class="card">
						<img src="http://via.placeholder.com/200x200" alt="Evento" class="card-img-tp">
						<div class="card-body">
							<h5 class="card-title">{{ $evento->nombre}}</h5>
							<p class="card-text">{{ $evento->fecha }} - {{ $evento->direccion }}</p>
							<a href="{{ route('eventos.show', $evento->id) }}" class="btn btn-primary">Detalle</a>
							<a href="{{ route('campeonatos.show', $evento->campeonato_id) }}" class="btn btn-primary">Campeonato</a>
						</div>
					</div>
				</div> --}}