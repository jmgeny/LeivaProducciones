@extends('layouts.crud')

@section('title', 'Listado Campeonatos')
@section('titulo', 'CRUD Campeonatos')

@section('content')
	<article class="col-sm-10">
		<h2>
			Campeonatos
			<a href="{{ route('campeonatos.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
			@include('eventos.codigo.info')
		<div class="row">
			@foreach($campeonatos as $campeonato)
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3>{{ $campeonato->nombre }}</h3> 
          </div>
          <div class="panel-body text-center">
              <img src="{{ $campeonato->avatar }}" class="img-thumbnail" alt="Cinque Terre">
              <p class="card-text">{{ $campeonato->categoria() }}</p>
              <p class="card-text">{{ $campeonato->deporte() }}</p>
              <p class="card-text">Desde: {{ $campeonato->fecha_inicio }}</p>
              <p class="card-text">Hsta: {{ $campeonato->fecha_fin }}</p>              
          </div>
          <div class="panel-footer">
          	<a href="{{ route('campeonatos.edit', $campeonato->id) }}" class="btn btn-primary">Editar</a>
          	<a href="{{ route('campeonatos.show',$campeonato->id) }}" class="btn btn-primary pull-right">Ver</a>
          	<form action="{{ route('campeonatos.destroy',$campeonato->id) }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-primary">Borrar</button>
						</form>

          </div>
        </div>				
			@endforeach	
		</div>	
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