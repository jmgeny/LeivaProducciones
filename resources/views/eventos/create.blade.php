@extends('layouts.vistas')

@section('title','Editar Un Evento')

@section('content')
	<section class="container-fluid">
		@include('navbarAdmin')
	</section>
	
	<section class="container">
		<section class="row">
			<section class="col-sm-10">
			    <h2>
			      Nuevo Evento
			      <a href="{{route('event.index')}}" class="btn btn-primary pull-right">Listar</a>
			    </h2>
			    @include('eventos.codigo.info')

    {!! Form::open(['route' => 'event.store', 'files' => true]) !!}
      @include('eventos.codigo.form')
    {!! Form::close() !!}  

			</section>
			<section class="col-sm-2">
				
			</section>
		</section>
	</section>	

@endsection