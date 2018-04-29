@extends('layouts.crud')

@section('title', 'Crear Campeonatos')
@section('titulo', 'CRUD Campeonatos')

@section('content')
<article class="col-sm-10">
	<h2>Crear Campeonato
		<a href="{{route('editCampeonatos.index')}}" class="btn btn-primary pull-right">Listar</a>
	</h2>
	@include('campeonatos.codigo.error')
	{!! Form::open(['route' => 'editCampeonatos.store', 'files' => true]) !!}
      @include('campeonatos.codigo.form')
    {!! Form::close() !!}

</article>
<article class="col-sm-2">
	@include('eventos.codigo.aside')
</article>
@endsection