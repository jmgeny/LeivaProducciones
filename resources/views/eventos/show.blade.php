@extends('layouts.admin')

@section('title','Ver Evento')

@section('content')
	<section class="container-fluid">
		@include('navbarAdmin')
	</section>
	
	<section class="container">
		<section class="row">
			<section class="col-sm-12">
        <h2>{{ $evento->nombre}}</h2>
        <p>{{ $evento->fecha}} - {{$evento->city->nombre}}</p>

<ul class="list-group">
        <li class="list-group-item"><h4>Campeonato:</h4> {{ $evento->championship->nombre}}</li>
        <li class="list-group-item"><h4>Deporte:</h4> {{ $evento->sport->nombre}}</li>
        <li class="list-group-item"><h4>Especialidad:</h4> {{ $evento->specification->nombre}}</li>

        <li class="list-group-item"><h4>Descripción:</h4> {{ $evento->descripcion}}</li>
        <li class="list-group-item"><h4>Cronograma:</h4> {{ $evento->cronograma}}</li>
		<li class="list-group-item"><h4>Direccion:</h4> {{ $evento->direccion}}</li>
		<li class="list-group-item"><h4>Como llegar y donde dormir:</h4> {{ $evento->llegar_dormir}}</li>

		<li class="list-group-item"><h4>Contacto:</h4> {{ $evento->contacto}}</li>

        <li class="list-group-item"><h4>Inscriptos:</h4> {{ $evento->inscripto}}</li>
        <li class="list-group-item"><h4>Resultados:</h4> {{ $evento->resultado}}</li>
</ul>
		<a href="{{ route('event.edit', $evento->id) }}" class="btn btn-primary">Editar</a>
        <a href="{{route('event.index')}}" class="btn btn-primary pull-right">Listar</a>
			</section>

		</section>
	</section>	

@endsection