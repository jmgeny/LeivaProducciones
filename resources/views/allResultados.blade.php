@extends('layouts.principal')

@section('title','Resultado')

@section('content')
<section class="container-fluid">
		@include('navbar2')
</section>

<section class="container">
	<h2>Todos los Resultados</h2>
<section class="row">
	<article class="col-sm-8">
		{{-- <section class="row" style="background-color: red"> --}}
            @foreach($resultados as $resultado)
          <div class="col-md-6 col-lg-4 divEvento">
            <a class="evento-item d-block mx-auto" href="{{ url('/evento',$resultado->id) }}">
              <div class="card">
                <img class="card-img-top" src="{{ Storage::url($resultado->championship->avatar) }}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">{{ $resultado->nombre }}</h4>
                  <p class="card-text">{{ $resultado->city->nombre }} - {{ $resultado->fecha }}</p>
                </div>
              </div>
            </a>
          </div>
            @endforeach
		{{-- </section> --}}
	</article>

	<aside class="col-sm-4">
		@include('aside')
	</aside>

</section>	
</section> {{--container --}}

@endsection