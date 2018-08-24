@extends('layouts.principal')

@section('title','Resultados')

@section('content')

  @include('navbar2')
  <h1 class="titulo"><a href="{{ url('/') }}">LEIMAN</a></h1>

    <section class="container-fluid">
      {{-- <div class="container"> --}}

  <section class="row">
    <section class="col-sm-8">
        <div class="row no-gutters">
          @foreach($resultados as $evento)
          <div class="col-lg-4">
                  <h2>{{ $evento->nombre }}</h2>
                  <p class="mb-0 pCaption">{{ $evento->city->nombre }} - {{ $evento->fecha }}</p>
            <a class="portfolio-item" href="{{ url('/resultado',$evento->id) }}">
              <span class="caption">
                <span class="caption-content">
                  <p class="pCaption">ver detalle</p>
                </span>
              </span>
              <img class="img-fluid" src="{{ Storage::url($evento->championship->avatar) }}" alt="">
            </a>
          </div>
          @endforeach
        </div>      
    </section>
    <aside class="col-sm-4">
      @include('carrusel')
    </aside>
  </section>
</section>
    @include('contacto')
@endsection