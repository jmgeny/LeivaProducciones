@extends('layouts.crud')

@section('title', 'Ver Campeonato')
@section('titulo', 'CRUD Campeonatos')

@section('content')
    <section class="col-sm-10">
{{--         <div class="card text-center">
            <div class="card-header"><h3>{{ $campeonato->nombre }}</h3></div>
          <img class="card-img-top" src="../img/img_avatar1.png" alt="Card image">
          <div class="card-body">            
            <p class="card-text">{{ $campeonato->categoria_id }}</p>
            <p class="card-text">{{ $campeonato->deporte_id }}</p>
            <p class="card-text">{{ $campeonato->fecha_inicio }}</p>
            <p class="card-text">{{ $campeonato->fecha_fin }}</p>
            <a href="{{ route('eventos.index')}}" class="btn btn-primary">Ver Eventos</a>
          </div>
        </div> --}}
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h3>{{ $campeonato->nombre }}</h3>
          </div>
          <div class="panel-body">
              <img src="../img/img_avatar1.png" class="img-thumbnail" alt="Cinque Terre">
              <p class="card-text">{{ $campeonato->categoria_id }}</p>
              <p class="card-text">{{ $campeonato->deporte_id }}</p>
              <p class="card-text">{{ $campeonato->fecha_inicio }}</p>
              <p class="card-text">{{ $campeonato->fecha_fin }}</p>
              <a href="{{ route('eventos.index')}}" class="btn btn-primary">Ver Eventos</a>              
          </div>
        </div>
    </section>
    <section class="col-sm-2">
        @include('eventos.codigo.aside');
    </section>

@endsection