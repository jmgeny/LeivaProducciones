@extends('eventos.layouts')

@section('content')
	<article class="col-sm-8">
    <h2>
      Crear Evento
      <a href="{{route('eventos.index')}}" class="btn btn-primary pull-right">Listar</a>
    </h2>
    Formulario      
	</article>
	<article class="col-sm-4 text-center">
		@include('eventos.codigo.aside');
	</article>
@endsection