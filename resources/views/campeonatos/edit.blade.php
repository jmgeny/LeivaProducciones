@extends('layouts.crud')

@section('title', 'Editar Campeonatos')
@section('titulo', 'CRUD Campeonatos')

@section('content')
  <article class="col-sm-10">
    <h2>
      Editar Campeonato
      <a href="{{route('campeonatos.index')}}" class="btn btn-primary pull-right">Listar</a>
    </h2>
    @include('campeonatos.codigo.error')
    {!! Form::model($campeonato, ['route' => ['campeonatos.update', $campeonato->id], 'method' =>'PUT', 'files' => true]) !!}
      @include('campeonatos.codigo.form')
    {!! Form::close() !!}
        
  </article>
  <article class="col-sm-2 text-center">
    
  </article>	
@endsection