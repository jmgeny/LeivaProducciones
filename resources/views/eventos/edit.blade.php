@extends('layouts.crud')

@section('title', 'Crear Evento')
@section('titulo', 'CRUD Eventos')

@section('content')
  <article class="col-sm-10">
    <h2>
      Crear Evento
      <a href="{{route('editEventos.index')}}" class="btn btn-primary pull-right">Listar</a>
    </h2>
    @include('eventos.codigo.info')

    {!! Form::model($evento, ['route' => ['editEventos.update', $evento->id], 'method' =>'PUT', 'files' => true]) !!}
      @include('eventos.codigo.form')
    {!! Form::close() !!}      

  </article>
  <article class="col-sm-2 text-center">
    @include('eventos.codigo.aside')
  </article>
@endsection