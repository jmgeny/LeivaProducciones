@extends('layouts.app')

@section('title', 'Administrador')
@section('titulo', 'Administrador')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Administrador</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-2">
            {{-- @include('eventos.codigo.aside') --}}
        </div>
    </div>
</div>
@endsection
