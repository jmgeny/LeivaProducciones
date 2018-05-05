@extends('layouts.pantalla')

@section('title', 'Evento')


@section('content')
@include('navbar2')
<section class="container sec-prin">
  <section class="row">
  	<section class="col-sm-8">
      <div>
        <h4>{{$evento->nombre}}</h4>
        <i class="fa fa-calendar"></i> {{$evento->fecha}} - {{$evento->ciudad->name}}
        <a href="{{ url('/eventos') }}" class="btn btn-primary pull-right">Lista</a>        
      </div>     
          <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Evento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Info Local</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Contacto</a>
          </li>
        </ul>

          <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active container" id="home">
            <div class="row text-center">
              <div class="col-sm-6"><h4><a href="">Inscriptos</a></h4>
                {{-- {{$evento->inscripto}} --}}
              </div>
              <div class="col-sm-6"><h4><a href="">Resultados</a></h4>
                {{-- {{$evento->resultado}} --}}
              </div>
            </div>

            <h6>Campeonato</h6>
            <p>{{$evento->campeonato->nombre}}</p>
            <h6>Deporte</h6>
            <p>{{$evento->deporte->name}}</p>
            <h6>Distancia</h6>
            <p>{{$evento->distancia->nombre}}</p>
            <h6>Detalles</h6>
            <p>{{$evento->descripcion}}</p>
            <h6>Cronograma</h6>
            <p>{{$evento->cronograma}}</p>

          </div>
          <div class="tab-pane container" id="menu1">
            <h6>Dirección</h6>
            <p>{{$evento->direccion}}</p>
            <h6>Sugerencias</h6>
            <p>{{$evento->llegar_dormir}}</p>
          </div>
          <div class="tab-pane container" id="menu2">
            <h6>Contacto</h6>
            <p>{{$evento->contacto}}</p>
            <h6>Inscripción</h6>
            <p>{{$evento->inscripcion}}</p>
          </div>
        </div>
  	</section>
  	<aside class="col-sm-4">
  		@include('aside')
  	</aside>
  </section>
</section>  
@endsection