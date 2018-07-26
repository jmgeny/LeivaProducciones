@extends('layouts.vistas')

@section('title','Evento')

@section('content')
<section class="container-fluid">
		@include('navbar2')
</section>

<section class="container">
  <h1>Evento</h1>
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
          <h3>{{ $evento->fecha }} - {{ $evento->city->nombre }}</h3>
          <div class="row">
            <div class="col-md-6">
              @if ($evento->inscripto)
              <a href="{{ Storage::url($evento->inscripto) }}"><button class="btn btn-primary"><h3>Inscriptos</h3></button></a>
              @endif
            </div>
            <div class="col-md-6">
              <a href="{{ Storage::url($evento->resultado) }}"><button class="btn btn-primary"><h3>Reultado</h3></button></a>
            </div>
          </div>
          <p><h4>Deporte: </h4>{{ $evento->sport->nombre }}</p>
          <p><h4>Distancia:</h4> {{ $evento->specification->nombre }}</p>
          <p><h4>Descrición:</h4> {{ $evento->descripcion }}</p>
          <p><h4>Cronogram</h4> {{ $evento->cronograma }}</p>
          <p><h4>Dierección:</h4> {{ $evento->direccion }}</p>
          <p><h4>Mas datos:</h4> {{ $evento->llegar_dormir }}</p>
          <p><h4>Contacto:</h4> {{ $evento->inscripcion }}</p>
        </div>
      </div>
    </section>
    <aside class="col-sm-4">
      @include('aside')
    </aside>
  </section>	
</section> {{--container --}}

@endsection