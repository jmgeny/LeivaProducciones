@extends('layouts.crud')

@section('title', 'Listado Eventos')
@section('titulo', 'CRUD Eventos')

@section('content')
	<article class="col-sm-10">
		<h2>
			Listado de Evento
			<a href="{{ route('eventos.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
			@include('eventos.codigo.info')
		<div class="row">
			@foreach($eventos as $evento)
				<div class="col-sm-4">
					<div class="card">
						<img src="http://via.placeholder.com/200x200" alt="Evento" class="card-img-tp">
						<div class="card-body">
							<h5 class="card-title">{{ $evento->nombre}}</h5>
							<p class="card-text">{{ $evento->fecha }} - {{ $evento->direccion }}</p>
							<a href="{{ route('eventos.show', $evento->id) }}" class="btn btn-primary">Detalle</a>
							<a href="{{ route('campeonatos.show', $evento->campeonato_id) }}" class="btn btn-primary">Campeonato</a>
						</div>
					</div>
				</div>
			@endforeach	
		</div>	
	</article>
	<article class="col-sm-2">
		@include('eventos.codigo.aside')
	</article>
@endsection