@extends('layouts.principal')

@section('title', 'Principal')

@section('content')
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      @include('navbar')
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      @include('header')
    </header>

    <!-- Evento Section -->
    <section class="portfolio" id="portfolio">
      {{-- @include('eventos') --}}
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0"><a href="{{ url('/eventos') }}">Eventos</a></h2>
        <hr class="star-dark mb-5">
        <div class="row">
      @foreach($eventos as $evento)
          <div class="col-sm-3">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{$evento->nombre}}</h4>
              </div>
              <img class="card-img-top" src="{{$evento->campeonato->avatar}}" alt="Card image">
              <div class="card-body">
                <p class="card-text">{{$evento->fecha}} - {{$evento->direccion}}</p>
              </div>
              <div class="card-footer">
                  <a href="{{ url('/evento',$evento->id) }}" class="btn btn-primary">Ver Mas</a>
              </div>
            </div>            
          </div>        
      @endforeach
        </div>
      </div>       
    </section>

    <!-- Resultados Section -->
    <section class="portfolio bg-primary" id="resultados">
      {{-- @include('resultados') --}}
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0"><a href="{{ url('/eventos') }}">Resultados</a></h2>
        <hr class="star-dark mb-5">
        <div class="row">
      @foreach($resultados as $resultado)
          <div class="col-sm-3">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{$resultado->nombre}}</h4>
              </div>
              <img class="card-img-top" src="{{$resultado->campeonato->avatar}}" alt="Card image">
              <div class="card-body">
                <p class="card-text">{{$resultado->fecha}} - {{$resultado->direccion}}</p>
              </div>
              <div class="card-footer">
                  <a href="{{ url('/evento',$resultado->id) }}" class="btn btn-primary">Ver Mas</a>
              </div>
            </div>            
          </div>       
      @endforeach
        </div>
      </div>      
    </section>    

    <!-- Nosotros Section -->
    <section class="portfolio" id="about">
      @include('nosotros')
    </section>

    <!-- Servicios -->
{{--     <section class="portfolio bg-primary" id="servicios">
      @include('servicios')
    </section> --}}

    <!-- Contacto Section -->
    <section class="portfolio" id="contact">
      @include('contacto')      
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
          
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
              <p class="lead mb-0">Juan Manuel Geny - 2018</p>
          </div>
          <div class="col-md-4">

          </div>
        </div>
      </div>
    </footer>

    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>    
@endsection