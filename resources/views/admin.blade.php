@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Administrador de Contenido</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{route('event.index')}}">Evento</a></li>
                        <li class="list-group-item"><a href="{{route('championship.index')}}">Campeonato</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
