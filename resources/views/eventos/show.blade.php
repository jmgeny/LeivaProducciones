@extends('layouts.crud')

@section('title', 'Ver Evento')
@section('titulo', 'CRUD Eventos')

@section('content')
	<article class="col-sm-10">
        <section class="panel panel-default">
            <section class="panel-heading">
            <h2>{{ $evento->nombre}} 
                <a href="{{route('eventos.index')}}" class="btn btn-primary pull-right">Listar</a>
            </h2>
            <p>{{ $evento->fecha}} - {{ $evento->ciudad_id}}</p>

            </section>

            <section class="panel-body">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Evento</a></li>
        <li><a data-toggle="tab" href="#menu1">Local</a></li>
        <li><a data-toggle="tab" href="#menu2">Contacto</a></li>
    </ul>

    <section class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="row">
                <div class="col-sm-6 div_crud text-center">
                    <p><strong>Lista de Inscriptos:</strong> <br> {{ $evento->inscripto}}</p>
                </div>
                <div class="col-sm-6 div_crud text-center">
                    <p><strong>Resultados:</strong> <br> {{ $evento->resultado}}</p>
                </div>
            </div>
            <div class="div_crud">
                <p><strong>Campeonato:</strong> <br> {{ $evento->campeonato_id}}</p>
                <p><strong>Deporte:</strong> <br> {{ $evento->deporte_id}}</p>
                <p><strong>Especialidad:</strong> <br> {{ $evento->especialidad_id}}</p>
                <p><strong>Descripción:</strong> <br> {{ $evento->descripcion}}</p>
                <p><strong>Cronograma:</strong> <br> {{ $evento->cronograma}}</p>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <div class="div_crud">
                <p><strong>Dirección:</strong> <br> {{ $evento->direccion}}</p>
                <p><strong>Como llegar y donde dormir:</strong> <br> {{ $evento->llegar_dormir}}</p>
            </div>    
        </div>
        <div id="menu2" class="tab-pane fade">
          <div class="div_crud">
            <p><strong>Contacto:</strong> <br> {{ $evento->contacto}}</p>
            <p><strong>Como inscribirme:</strong> <br> {{ $evento->inscripcion}}</p>
          </div>  
        </div>
    </section>                
            </section>

        </section>

        <a href="{{ route('eventos.edit', $evento->id) }}" class="btn btn-primary pull-right">Editar</a>
	</article>
	<article class="col-sm-2 text-center">
		@include('eventos.codigo.aside');
	</article>
@endsection