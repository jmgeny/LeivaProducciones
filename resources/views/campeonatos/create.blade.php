@extends('layouts.admin')

@section('title','Crear Campeonato')

@section('content')

		{{-- @include('navadmin') --}}
		
<section class="container">
	<section class="row">
		<section class="col-sm-12">
			    <h2>
			      Nuevo Campeonato
			      <a href="{{route('championship.index')}}" class="btn btn-primary pull-right">Listar</a>
			    </h2>
			    @include('eventos.codigo.info')
				@include('extras.error')
			    {!! Form::open(['route' => 'championship.store', 'files' => true]) !!}
			      @include('campeonatos.codigo.form')
			    {!! Form::close() !!}  
		</section>

	</section>
</section>
		
@endsection