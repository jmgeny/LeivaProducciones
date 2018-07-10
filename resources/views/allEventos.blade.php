@extends('layouts.principal')

@section('title','Todos los eventos')

@section('content')
<section class="container-fluid">
		@include('navbar2')
</section>

<section class="container">
	<h2>Todos los Eventos</h2>
<section class="row">
	<section class="col-sm-8">
		<div class="row">
            @foreach($eventos as $evento)
          <div class="col-md-6 col-lg-4">
            <a class="evento-item d-block mx-auto" href="{{ url('/evento',$evento->id) }}">
              <div class="card">
                <img class="card-img-top" src="img/img_avatar1.png" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">{{ $evento->nombre }}</h4>
                  <p class="card-text">{{ $evento->city->nombre }} - {{ $evento->fecha }}</p>
                </div>
              </div>
            </a>
            </div>
            @endforeach
		</div>
	</section>
	<section class="col-sm-4">
		@include('aside')
	</section>

</section>	
</section> {{--container --}}

@endsection