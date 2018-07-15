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
          <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('storage/' . $evento->championship->avatar) }}" alt="">
        </div>
        <div class="col-md-8">
          <h2>{{ $evento->nombre }}</h2>
          <h3>{{ $evento->fecha }} - {{ $evento->city->nombre }}</h3>
          <p>Inscriptos: {{ $evento->inscripto }}</p>
          <p>Reultado: {{ $evento->resultado }}</p>
          <p>Deporte: {{ $evento->sport->nombre }}</p>
          <p>Distancia: {{ $evento->specification->nombre }}</p>
          <p>Descrición: {{ $evento->descripcion }}</p>
          <p>Cronograma: {{ $evento->cronograma }}</p>
          <p>Dierección: {{ $evento->direccion }}</p>
          <p>Mas datos: {{ $evento->llegar_dormir }}</p>
          <p>Contacto: {{ $evento->inscripcion }}</p>
        </div>
      </div>
    </section>
    <aside class="col-sm-4">
      @include('aside')
    </aside>
  </section>	
</section> {{--container --}}

@endsection