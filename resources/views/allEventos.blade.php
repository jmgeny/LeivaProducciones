@extends('layouts.vistas')

@section('title','Todos los eventos')

@section('content')
<section class="container-fluid">
		@include('navbar2')
</section>

<section class="container">
	<h4>Eventos</h4>
<section class="row">
	<section class="col-sm-8">
		<section class="row">
			{{-- aca va el foreach --}}
			<a href="{{ url('/evento/1') }}">
				<article class="panel panel-default col-md-6 col-lg-4">
					<div class="panel-heading">Panel Heading</div>
					<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nisi commodi sequi incidunt, consectetur sed recusandae odit facere. Quae perspiciatis facere impedit eligendi ut obcaecati aut explicabo accusantium doloremque deserunt!</div>
					<div class="panel-footer">Panel Footer</div>
				</article>
			</a>
		</section>
	</section>

	<section class="col-sm-4">
		@include('aside')
	</section>

</section>	
</section> {{--container --}}

@endsection