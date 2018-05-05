@extends('layouts.app')

@section('title', 'Ver Evento')
@section('titulo', 'CRUD Eventos')

@section('content')
    <article class="col-sm-10">
        <h2>{{ $evento->nombre}}
        </h2>
        {{ $evento->fecha}} - {{$evento->ciudad_id}}

        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#home">Evento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#menu1">Local Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#menu2">Contacto</a>
          </li>
          <li class="nav-item">
              <a href="#menu3" data-toggle="pill" class="nav-link">Inscripción</a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active container" id="home">
            <p>Inscriptos: {{ $evento->inscripto}}</p>
            <p>Resultados: {{ $evento->resultado}}</p>
            <p>Descripción: {{ $evento->descripcion}}</p>
            <p>Cronograma: {{ $evento->cronograma}}</p>
            <p>Campeonato: {{ $evento->campeonato_id}}</p>
            {{-- ir a tabla campeonatos --}}
            <p>Deporte: {{ $evento->deporte_id}}</p>
            {{-- ir a tabla deportes --}}
            <p>Especialidad: {{ $evento->especialidad_id}}</p>
            {{-- ir a tabla distancias --}}
          </div>
          <div class="tab-pane container" id="menu1">
            <p>Direccion: {{ $evento->direccion}}</p>
            <p>Como llegar y donde dormir: {{ $evento->llegar_dormir}}</p>
          </div>
          <div class="tab-pane container" id="menu2">
            <p>Contacto: {{ $evento->contacto}}</p>
          </div>
          <div class="tab-pane container" id="menu3">
              <a href="#" class="btn btn-primary" target="new">Inscripción</a>
          </div>
        </div>
        <a href="{{ route('editEventos.edit', $evento->id) }}" class="btn btn-primary">Editar</a>
        <a href="{{route('editEventos.index')}}" class="btn btn-primary pull-right">Listar</a>
    </article>
    <article class="col-sm-2">
        {{-- @include('eventos.codigo.aside') --}}
    </article>
@endsection
{{-- 
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
    </article> --}}