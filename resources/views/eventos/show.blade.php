@extends('layouts.vistas')

@section('title','Un Evento')

@section('content')
	<section class="container-fluid">
		@include('navbarAdmin')
	</section>
	
	<section class="container">
		<section class="row">
			<section class="col-sm-10">
				muestro un registro
				<h4>{{ $evento->nombre }}</h4>
			</section>
			<section class="col-sm-2">
				
			</section>
		</section>
	</section>	

@endsection