@extends('layouts.admin')

@section('title','Ver Campeonato')

@section('content')

		{{-- @include('navadmin') --}}
		
	
	<section class="container">
		<section class="row">
			<section class="col-sm-12">
		    <h2>
		      Ver Campeonato
		      <a href="{{route('championship.index')}}" class="btn btn-primary pull-right">Listar</a>
		    </h2>

			<div class="panel panel-default">
				<div class="panel-heading">
				  	<p>{{ $campeonato->nombre }}</p>
				  	<p>{{ $campeonato->fecha_inicio}} hasta {{ $campeonato->fecha_fin }}</p>
				</div>
				<div class="panel-body">
				  	<img src="#" class="img-rounded" alt="Cinque Terre">
				  	<p>Categoria: {{ $campeonato->category_id }}</p>
				  	<p>Deporte: {{ $campeonato->sport_id }}</p>
				</div>
				<div class="panel-footer">
				  	<a href=" {{ route('championship.edit', $campeonato->id) }}" class="btn btn-primary">Editar</a>
				</div>				
			</div>
        	</section>
		</section>
	</section>	

@endsection