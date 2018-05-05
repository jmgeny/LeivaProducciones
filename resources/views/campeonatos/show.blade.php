@extends('layouts.app')

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
              <p class="card-text"><h4>Categoria</h4>{{ $campeonato->categoria->nombre }}</p>
              <p class="card-text"><h4>Deporte</h4> {{ $campeonato->deporte->nombre }}</p>
              <p class="card-text"><h4>Fecha de Inicio</h4>{{ $campeonato->fecha_inicio }}</p>
              <p class="card-text"><h4>Fecha de Fin</h4>{{ $campeonato->fecha_fin }}</p>
          </div>
          <div class="panel-footer">
            <a href=" {{ route('editCampeonatos.edit', $campeonato->id) }}" class="btn btn-primary">Editar</a>
            <a href="{{ route('editCampeonatos.index')}}" class="btn btn-primary pull-right">Listar</a>
          </div>
        </div>
    </section>
    <section class="col-sm-2">
        {{-- @include('eventos.codigo.aside') --}}
    </section>
@endsection