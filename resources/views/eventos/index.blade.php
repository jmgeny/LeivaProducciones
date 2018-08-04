@extends('layouts.principal')

@section('title','Todos los Eventos')

@section('content')

    @include('navbarAdmin')

<section class="container">
  <section class="row">
    <section class="col-sm-12">
    <h2>
      Listado de Evento
      <a href="{{ route('event.create') }}" class="btn btn-primary pull-right">Nuevo</a>
    </h2>
      @include('eventos.codigo.info')
    <table class="table">
      <thead>
        <tr>
          <th>Campeonato</th>
          <th>Nombre</th>
          <th>Fecha</th>
          <th>Ciudad</th>
          <th>Deporte</th>
          <th>ver</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr> 
      </thead>
      <tbody>
        @foreach($eventos as $evento)
        <tr>
          <td>{{ $evento->championship->nombre }}</td>
          <td>{{$evento->nombre}}</td>
          <td>{{$evento->fecha}}</td>
          <td>{{$evento->city->nombre}}</td>
          <td>{{$evento->sport->nombre}}</td>
          <td><a href="{{ route('event.show', $evento->id) }}" class="btn btn-primary">ver</a></td>
          <td><a href=" {{ route('event.edit', $evento->id) }}" class="btn btn-primary">Editar</a></td>
          <td><form action="{{ route('event.destroy',$evento->id) }}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="DELETE">
              <button class="btn btn-danger">Borrar</button>
            </form></td>
        </tr>
        @endforeach       
      </tbody>
    </table>
    </section>
  </section>
</section>
    
@endsection