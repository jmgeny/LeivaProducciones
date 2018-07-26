@extends('layouts.admin')

@section('title','Editar Evento')

@section('content')
	<section class="container-fluid">
		@include('navbarAdmin')
	</section>
	
	<section class="container">
		<section class="row">
			<section class="col-sm-12">
			    <h2>
			      Editar Evento
			      <a href="{{route('event.index')}}" class="btn btn-primary pull-right">Listar</a>
			    </h2>
			    @include('eventos.codigo.info')
			    @include('extras.error')

    {!! Form::model($evento, ['route' => ['event.update', $evento->id], 'method' =>'PUT', 'files' => true]) !!}
      @include('eventos.codigo.form')
    {!! Form::close() !!}  

			</section>
		</section>
	</section>	

@endsection