@extends('layouts.crud')

@section('title', 'Ver Campeonato')
@section('titulo', 'CRUD Campeonatos')

@section('content')
    <section class="col-sm-10">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3>{{ $campeonato->nombre }}</h3>
          </div>
          <div class="panel-body text-center">
              <img src="{{ $campeonato->avatar }}" class="img-thumbnail" alt="Cinque Terre">
              <p class="card-text">Categoria: {{ $campeonato->categoria() }}</p>
              <p class="card-text">Deporte: {{ $campeonato->deporte() }}</p>
              <p class="card-text">Fecha de Inicio: {{ $campeonato->fecha_inicio }}</p>
              <p class="card-text">Fecha de Fin: {{ $campeonato->fecha_fin }}</p>
          </div>
          <div class="panel-footer">
            <a href=" {{ route('editCampeonatos.edit', $campeonato->id) }}" class="btn btn-primary">Editar</a>
            <a href="{{ route('editCampeonatos.index')}}" class="btn btn-primary pull-right">Listar</a>
          </div>
        </div>
    </section>
    <section class="col-sm-2">
        @include('eventos.codigo.aside')
    </section>
@endsection