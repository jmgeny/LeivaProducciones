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
            @foreach($eventos as $evento)
          <div class="col-md-6 col-lg-4">
            <a class="evento-item d-block mx-auto" href="{{ url('/evento',$evento->id) }}">
              <div class="panel panel-default">
                <div class="panel-heading">{{ $evento->nombre }}</div>
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