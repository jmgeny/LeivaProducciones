@extends('layouts.principal')

@section('title','Crear Evento')

@section('content')

		@include('navbarAdmin')

	
	<section class="container">
		<section class="row">
			<section class="col-sm-12">
			    <h2>
			      Nuevo Evento
			      <a href="{{route('event.index')}}" class="btn btn-primary pull-right">Listar</a>
			    </h2>
			    @include('eventos.codigo.info')
			    @include('extras.error')

    {!! Form::open(['route' => 'event.store', 'files' => true]) !!}
      @include('eventos.codigo.form')
    {!! Form::close() !!}  

			</section>
		</section>
	</section>	

@endsection