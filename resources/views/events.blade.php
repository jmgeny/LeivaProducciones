@extends('layouts.pantalla')

@section('title', 'Eventos')

@section('content')
@include('navbar2')
<section class="container sec-prin">
  <section class="row">
  	<section class="col-sm-8">
		<article class="row">
  		@foreach($eventos as $evento)
		<div class="card col-sm-3">
		  <img class="card-img-top" src="{{$evento->campeonato->avatar}}" alt="Card image">
		  <div class="card-body">
		    <h5 class="card-title">{{ $evento->nombre }}</h5>
		    <p class="card-text">{{ $evento->fecha }}</p>
		    <p class="card-text">{{ $evento->ciudad->name }}</p>
		    <a href="{{ url('/evento',$evento->id) }}" class="btn btn-primary">Ver Mas</a>
		  </div>
		</div>
		@endforeach 		
		</article> 		
  	</section>
  	<aside class="col-sm-4">
  		@include('aside')
  	</aside>

  </section>
</section>  
@endsection