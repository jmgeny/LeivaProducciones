@extends('layouts.vistas')

@section('title','Resultado')

@section('content')
<section class="container-fluid">
		@include('navbar2')
</section>

<section class="container">
	<h4>Todos los Resultados</h4>
<section class="row">
	<section class="col-sm-8">
		<section class="row">
            @foreach($resultados as $resultado)
          <div class="col-md-6 col-lg-4">
            <a class="evento-item d-block mx-auto" href="{{ url('/evento',$resultado->id) }}">
              <div class="panel panel-default">
                <div class="panel-heading">{{ $resultado->nombre }}</div>
                <div class="panel-body">Panel Content</div>
                <div class="panel-footer">Panel Footer</div>
              </div>
            </a>
          </div>
            @endforeach
		</section>
	</section>

	<section class="col-sm-4">
		@include('aside')
	</section>

</section>	
</section> {{--container --}}



@endsection