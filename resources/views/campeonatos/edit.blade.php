@extends('layouts.admin')

@section('title','Editar Campeonato')

@section('content')

		{{-- @include('navadmin') --}}
		
<section class="container">
	<section class="row">
		<section class="col-sm-12">
		    <h2>
		      Editar Campeonato
		      <a href="{{route('championship.index')}}" class="btn btn-primary pull-right">Listar</a>
		    </h2>
		    @include('extras.error')
		    @include('eventos.codigo.info')
		    {!! Form::model($campeonato, ['route' => ['championship.update', $campeonato->id], 'method' =>'PUT', 'files' => true]) !!}
		      @include('campeonatos.codigo.form')
		    {!! Form::close() !!}

		</section>

	</section>
</section>
		
@endsection