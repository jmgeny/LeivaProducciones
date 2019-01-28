@extends('layouts.principal')

@section('title','Evento')

@section('content')

@include('navbar2')
<h1 class="titulo"><a href="{{ url('/') }}">LEIMAN</a></h1>

<section class="container">
  {{-- <div class="container"> --}}
    <section class="row">
      <section class="col-sm-10">
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
            <a href="mailto:{{ $evento->contacto }}" class="btn btn-primary">{{ $evento->contacto }}</a>            
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
            <h3>Deporte</h3>
            <pre>{{ $evento->sport->nombre }}</pre>
            <h3>Specificación</h3>
            <pre>{{ $evento->specification->nombre }}</pre>
            <h3>Descripción</h3>
            <pre>{{ $evento->descripcion }}</pre>
            <h3>Cronograma</h3>
            <pre>{{ $evento->cronograma }}</pre>
            <h3>Direccón</h3>
            <pre>{{ $evento->direccion }}</pre>
            <h3>Otros datos</h3>
            <pre>{{ $evento->llegar_dormir }}</pre>
          </div>
        </div>
      </section>
      <aside class="col-sm-2">
        @include('carrusel')
      </aside>
    </section>
</section>  

@include('contacto')
@endsection    