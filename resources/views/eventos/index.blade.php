@extends('layouts.vistas')

@section('title','Todos Eventos')

@section('content')
<section class="container-fluid">
		@include('navbarAdmin')
</section>
<section class="container">
	<section class="row">
		<section class="col-sm-10">
		<h2>
			Listado de Evento
			<a href="{{ route('event.create') }}" class="btn btn-primary pull-right">Nuevo</a>
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
					{{-- <td>{{$evento->ciudad->name}}</td> --}}
					<td>ciudad</td>
					{{-- {{ dd($evento->ciudad->name)}} --}}
					<td>Deprote</td>
					{{-- <td>{{$evento->deporte->nombre}}</td> --}}
					<td><a href="{{ route('event.show', $evento->id) }}" class="btn btn-primary">ver</a></td>
					<td><a href=" {{ route('event.edit', $evento->id) }}" class="btn btn-primary">Editar</a></td>
					<td><form action="{{ route('event.destroy',$evento->id) }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-danger">Borrar</button>
						</form></td>
				</tr>
				@endforeach				
			</tbody>
		</table>
		</section>
		<section class="col-sm-2">
			Lateral
		</section>
	</section>
</section>
		
@endsection