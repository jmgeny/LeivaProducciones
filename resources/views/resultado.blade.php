@extends('layouts.vistas')

@section('title','Resultado')

@section('content')
<section class="container-fluid">
		@include('navbar2')
</section>

<section class="container">
	<h4>Un Resultado</h4>
	<section class="row">
	  <article class="col-sm-8">
	      <div>
	        <h4>Nombre</h4>
	        <i class="fa fa-calendar"></i> Fecha - Ciudad
	        <a href="{{ url('/allResultados') }}" class="btn btn-primary pull-right">Lista</a>        
	      </div>

		<ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#home">Evento</a></li>
		  <li><a data-toggle="tab" href="#menu1">Info Local</a></li>
		  <li><a data-toggle="tab" href="#menu2">Contacto</a></li>
		</ul>

		<div class="tab-content">
		  <div id="home" class="tab-pane fade in active">
			  	<div class="row text-center">
			  		<div class="col-sm-6"><h4><a href="#"></a>Inscriptos</h4></div>
			  		<div class="col-sm-6"><h4><a href="#"></a>Resultados</h4></div>
			  	</div>
		            <h6>Campeonato</h6>
		            {{-- <p>{{$evento->campeonato->nombre}}</p> --}}
		            <h6>Deporte</h6>
		            {{-- <p>{{$evento->deporte->name}}</p> --}}
		            <h6>Distancia</h6>
		            {{-- <p>{{$evento->distancia->nombre}}</p> --}}
		            <h6>Detalles</h6>
		            {{-- <p>{{$evento->descripcion}}</p> --}}
		            <h6>Cronograma</h6>
		            {{-- <p>{{$evento->cronograma}}</p>			  				  	 --}}
		  </div>
		  <div id="menu1" class="tab-pane fade">
            <h6>Dirección</h6>
            {{-- <p>{{$evento->direccion}}</p> --}}
            <h6>Sugerencias</h6>
            {{-- <p>{{$evento->llegar_dormir}}</p> --}}

		  </div>
		  <div id="menu2" class="tab-pane fade">
            <h6>Contacto</h6>
            {{-- <p>{{$evento->contacto}}</p> --}}
            <h6>Inscripción</h6>
            {{-- <p>{{$evento->inscripcion}}</p> --}}
		  </div>
		</div>

  	  </article>
	  <aside class="col-sm-4">
	  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, animi, amet? Magni qui similique commodi autem in natus, hic eligendi distinctio aperiam, odit inventore, a iure tempora accusantium quos rerum.</p>
	  </aside>
	</section>
</section>

@endsection