@extends('eventos.layouts')

@section('content')
  <article class="col-sm-10">
    <h2>
      Editar Evento
      <a href="{{route('eventos.index')}}" class="btn btn-primary pull-right">Listar</a>
    </h2>
    @include('eventos.codigo.error');
    {!! Form::model($evento, ['route' => ['eventos.update', $evento->id], 'method' =>'PUT']) !!}
      @include('eventos.codigo.form')
    {!! Form::close() !!}
        
  </article>
  <article class="col-sm-2 text-center">
    @include('eventos.codigo.aside');
  </article>
@endsection