@extends('layouts.principal')

@section('title','Resultado')

@section('content')
<section class="container-fluid">
		@include('navbar2')
</section>

<section class="container">
	<h2>Resultados</h2>
<section class="row">
	<section class="col-sm-8">
		<section class="row">
            @foreach($resultados as $resultado)
          <div class="col-md-6 col-lg-4">
            <a class="evento-item d-block mx-auto" href="{{ url('/resultado',$resultado->id) }}">
              <div class="card">
                <img class="card-img-top" src="img/img_avatar1.png" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">{{ $resultado->nombre }}</h4>
                  <p class="card-text">{{ $resultado->city->nombre }} - {{ $resultado->fecha }}</p>
                </div>
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