@extends('layouts.principal')

@section('title','Leiva Producciones')

@section('content')

    <!-- Navigation -->
    @include('navbar')

    <!-- Header -->
    @include('header')

    <!-- Eventos Grid Section -->
    @include('eventos')

    <!-- Resultados Section -->
    @include('resultados')

    <!-- Contact Section -->
    @include('contacto')

    <!-- Footer -->
    @include('footer')

@endsection
