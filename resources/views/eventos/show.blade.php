@extends('eventos.layouts')

@section('content')
	<article class="col-sm-8">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">{{ $evento->nombre}}<a href="{{ route('eventos.edit', $evento->id) }}" class="btn btn-primary pull-right">Editar</a></h4>
                <p class="card-text">{{ $evento->descripcion}}</p>
                <p class="card-text">{{ $evento->fecha}}</p>
              </div>
            </div>            
	</article>
	<article class="col-sm-4 text-center">
		Mensajes
	</article>
@endsection