@extends('layouts.admin')

@section('title','Ver Evento')

@section('content')
	
		{{-- @include('navadmin') --}}

	
	<section class="container">
		<section class="row">
			<section class="col-sm-12">
        <h2>{{ $evento->nombre}}</h2>
        <p>{{ $evento->fecha}} - {{$evento->city->nombre}}</p>

<ul class="list-group">
	<strong>Campeonato:</strong>
        <li class="list-group-item">{{ $evento->championship->nombre}}</li>
    <strong>Deporte:</strong>    
        <li class="list-group-item">{{ $evento->sport->nombre}}</li>
    <strong>Especialidad:</strong>
        <li class="list-group-item">{{ $evento->specification->nombre}}</li>
	<strong>Descripción:</strong>
        <li class="list-group-item">{{ $evento->descripcion}}</li>
    <strong>Cronograma:</strong>    
        <li class="list-group-item">{{ $evento->cronograma}}</li>
    <strong>Direccion:</strong>    
		<li class="list-group-item">{{ $evento->direccion}}</li>
	<strong>Como llegar y donde dormir:</strong>	
		<li class="list-group-item">{{ $evento->llegar_dormir}}</li>
	<strong>Contacto:</strong>
		<li class="list-group-item">{{ $evento->contacto}}</li>
	<strong>Inscriptos:</strong>
        <li class="list-group-item">{{ $evento->inscripto}}</li>
    <strong>Resultados:</strong>    
        <li class="list-group-item">{{ $evento->resultado}}</li>
</ul>
		<a href="{{ route('event.edit', $evento->id) }}" class="btn btn-primary">Editar</a>
        <a href="{{route('event.index')}}" class="btn btn-primary pull-right">Listar</a>
			</section>

		</section>
	</section>	

@endsection