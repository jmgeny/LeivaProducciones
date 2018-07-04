@extends('layouts.vistas')

@section('title','Evento')

@section('content')
<section class="container-fluid">
		@include('navbar2')
</section>

<section class="container">
	<h4>Evento</h4>
	<section class="row">
	  <article class="col-sm-8">
	      <div>
	        <h4>{{ $evento->nombre }}</h4>
	        <i class="fa fa-calendar"></i> {{ $evento->fecha }} - {{ $evento->city->nombre }}
	        <a href="{{ url('/allEventos') }}" class="btn btn-primary pull-right">Lista</a>        
	      </div>

		<ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#home">Evento</a></li>
		  <li><a data-toggle="tab" href="#menu1">Info Local</a></li>
		  <li><a data-toggle="tab" href="#menu2">Contacto</a></li>
		</ul>

		<div class="tab-content text-center">
		  <div id="home" class="tab-pane fade in active">
			  	<div class="row text-center">
			  		<div class="col-sm-6 panel panel-default"><h4><a href="#"></a>Inscriptos</h4></div>
			  		<div class="col-sm-6 panel panel-default"><h4><a href="#"></a>Resultados</h4></div>
			  	</div>
		            <h4>Campeonato</h4>
		            <p>{{$evento->championship->nombre}}</p>
		            <h4>Deporte</h4>
		            <p>{{$evento->sport->nombre}}</p>
		            <h4>Distancia</h4>
		            <p>{{$evento->specification->nombre}}</p>
		            <h4>Detalles</h4>
		            <p>{{$evento->descripcion}}</p>
		            <h4>Cronograma</h4>
		            <p>{{$evento->cronograma}}</p>			  				  	
		  </div>
		  <div id="menu1" class="tab-pane fade">
            <h4>Dirección</h4>
            <p>{{$evento->direccion}}</p>
            <h4>Sugerencias</h4>
            <p>{{$evento->llegar_dormir}}</p>

		  </div>
		  <div id="menu2" class="tab-pane fade">
            <h4>Contacto</h4>
            <p>{{$evento->contacto}}</p>
            <h4>Inscripción</h4>
            <p>{{$evento->inscripcion}}</p>
		  </div>
		</div>

  	  </article>
	  <aside class="col-sm-4">
	  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, animi, amet? Magni qui similique commodi autem in natus, hic eligendi distinctio aperiam, odit inventore, a iure tempora accusantium quos rerum.</p>
	  </aside>
	</section>
</section>

@endsection