@extends('layouts.principal')

@section('title','Evento')

@section('content')

  @include('navbar2')
  <h1 class="titulo"><a href="{{ url('/') }}">LEIMAN</a></h1>

    <section class="container-fluid">
      {{-- <div class="container"> --}}
  <section class="row">
    <section class="col-sm-8">
      <div>
        <h2>{{ $evento->championship->nombre }}</h2>
      </div>  
      <div class="row">
        <div class="col-md-4">
          <img class="img-fluid rounded mb-3 mb-md-0" src="{{ Storage::url($evento->championship->avatar) }}" alt="">
        </div>
        <div class="col-md-8">
          <h2>{{ $evento->nombre }}</h2> 
          @if ( date("Y-m-d") < $evento->fecha )
            <a href="{{ $evento->inscripcion }}" class="btn btn-primary" target="new">Inscribite</a>            
          @endif
          <h3>{{ $evento->fecha }} - {{ $evento->city->nombre }}</h3>
          <div class="row">
            <div class="col-md-6">
              @if ($evento->inscripto)
              <a href="{{ Storage::url($evento->inscripto) }}" class="btn btn-primary" target="new">Inscriptos</a>
              @endif
            </div>
            <div class="col-md-6">
              @if ($evento->resultado)
              <a href="{{ Storage::url($evento->resultado) }}" class="btn btn-primary" target="new">Resultado</a>
              @endif
            </div>
          </div>
          <p>{{ $evento->sport->nombre }}</p>
          <p>{{ $evento->specification->nombre }}</p>
          <p>{{ $evento->descripcion }}</p>
          <p>{{ $evento->cronograma }}</p>
          <p>{{ $evento->direccion }}</p>
          <p>{{ $evento->llegar_dormir }}</p>
          <h3> <a href="mailto:{{ $evento->contacto }}">{{ $evento->contacto }}</a></h3>
        </div>
      </div>
    </section>
    <aside class="col-sm-4">
      @include('carrusel')
    </aside>
  </section>

      {{-- </div> --}}
    </section>  

    @include('contacto')
@endsection    