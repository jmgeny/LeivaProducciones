@extends('eventos.layouts')

@section('content')
	<article class="col-sm-8">
		<h2>
			Listado de Eventos
			<a href="{{route('eventos.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('eventos.codigo.info');
		<table class="table tabe-hover">
			<thead>
				<tr>
					<th>id</th>
					<th>Evento</th>
					<th>Fecha</th>
					<th colspan="3" class="text-center">Controlles</th>
				</tr>
			</thead>
			<tbody>
				@foreach($eventos as $evento)
				<tr>
					<td>{{ $evento->id }}</td>
					<td>{{ $evento->nombre }}</td>
					<td>{{ $evento->fecha}}</td>
					<td><a href="{{ route('eventos.show', $evento->id) }}">Ver</a></td>
					<td><a href="{{ route('eventos.edit', $evento->id) }}">Editar</a></td>
					<td>
						<form action="{{ route('eventos.destroy',$evento->id) }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-link">Borrar</button>
						</form>
					</td>
				</tr>
				@endforeach				
			</tbody>
		</table>
		{{ $eventos->links() }}
	</article>
	<article class="col-sm-4 text-center">
		@include('eventos.codigo.aside');
	</article>
@endsection