@extends('eventos.layouts')

@section('content')
	<article class="col-sm-10">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">{{ $evento->nombre}}
            <a href="{{route('eventos.index')}}" class="btn btn-primary pull-right">Listar</a>
        </h3>
        <p class="card-text">{{ $evento->descripcion}}</p>
        <p class="card-text">{{ $evento->descripcion}}</p>
        <a href="{{ route('eventos.edit', $evento->id) }}" class="btn btn-primary pull-right">Editar</a>
      </div>
    </div>

	</article>
	<article class="col-sm-2 text-center">
		@include('eventos.codigo.aside');
	</article>
@endsection