@extends('layouts.principal')

@section('title','Evento')

@section('content')

@include('navbar2')
<h1 class="titulo"><a href="{{ url('/') }}">LEIMAN</a></h1>
<section class="container">
  <div class="row">
    <article class="col-sm-8 col-md-10">
      <div class="card">
        <div class="card-header">
          <h4>{{ $evento->championship->nombre }}</h4>
          <h5>{{ $evento->nombre }}</h5> <i class="icon-calendar"></i> {{ $evento->fecha }} {{ $evento->city->nombre }}
        </div>
        <div class="card-body">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Evento</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contacto</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

              <div class="row text-center">
                @if($evento->resultado)
                <div class="col-md-6">
                  <a href="{{ Storage::url($evento->resultado) }}" class="btn btn-default" target="new">Resultados</a>
                </div>
                @endif  
              </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <a href="mailto:{{ $evento->contacto }}" class="btn btn-default">{{ $evento->contacto }}</a>
            </div>
          </div>
        </div>
      </div>
    </article>
    <aside class="col-sm-4 col-md-2">
      @include('carrusel')
    </aside>
  </div>  
</section>

@endsection    