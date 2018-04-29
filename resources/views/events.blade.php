@extends('layouts.pantalla')

@section('title', 'Eventos')

@section('content')
@include('navbar2')
<section class="container sec-prin">
  <section class="row">
  	<section class="col-sm-10">
		<article class="row">
  		@foreach($eventos as $evento)
		<div class="card col-sm-4">
		  <img class="card-img-top" src="{{$evento->campeonato->avatar}}" alt="Card image">
		  <div class="card-body">
		    <h4 class="card-title">{{ $evento->nombre }}</h4>
		    <p class="card-text">{{ $evento->fecha }}</p>
		    <p class="card-text">{{ $evento->ciudad->name }}</p>
		    <a href="evento/{{$evento->id}}" class="btn btn-primary">Ver Mas</a>
		    {{-- <a href="{{ route('evento.event', $evento->id) }}" class="btn btn-primary">ver</a> --}}
		  </div>
		</div>
		@endforeach 		
		</article> 		
  	</section>
  	<aside class="col-sm-2">
  		Barra
  	</aside>

  </section>
</section>  
@endsection