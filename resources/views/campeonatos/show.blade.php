@extends('layouts.crud')

@section('title', 'Ver Campeonato')
@section('titulo', 'CRUD Campeonatos')

@section('content')
    <section class="col-sm-10">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3>{{ $campeonato->nombre }}<a href="{{ route('campeonatos.index')}}" class="btn btn-primary pull-right">Listar</a></h3>
          </div>
          <div class="panel-body text-center">
              <img src="{{ $campeonato->avatar }}" class="img-thumbnail" alt="Cinque Terre">
              <p class="card-text">Categoria: {{ $campeonato->categoria() }}</p>
              <p class="card-text">Deporte: {{ $campeonato->deporte() }}</p>
              <p class="card-text">Fecha de Inicio: {{ $campeonato->fecha_inicio }}</p>
              <p class="card-text">Fecha de Fin: {{ $campeonato->fecha_fin }}</p>              
          </div>
        </div>
    </section>
    <section class="col-sm-2">
        @include('eventos.codigo.aside')
    </section>
@endsection