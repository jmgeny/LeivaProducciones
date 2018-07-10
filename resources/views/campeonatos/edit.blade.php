@extends('layouts.admin')

@section('title','Editar Campeonato')

@section('content')
<section class="container-fluid">
		@include('navbarAdmin')
</section>
<section class="container">
	<section class="row">
		<section class="col-sm-10">
		    <h2>
		      Editar Campeonato
		      <a href="{{route('championship.index')}}" class="btn btn-primary pull-right">Listar</a>
		    </h2>
		    @include('campeonatos.codigo.error')
		    {!! Form::model($campeonato, ['route' => ['championship.update', $campeonato->id], 'method' =>'PUT', 'files' => true]) !!}
		      @include('campeonatos.codigo.form')
		    {!! Form::close() !!}

		</section>
		<section class="col-sm-2">
			<h4>Lateral</h4>
		</section>
	</section>
</section>
		
@endsection