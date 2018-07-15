@extends('layouts.principal')

@section('title','Eventos')

@section('content')
<section class="container-fluid">
    @include('navbar2')
</section>

<section class="container">
  <h2>Todos los Eventos</h2>
<section class="row">
  <article class="col-sm-8">
    {{-- <section class="row" style="background-color: red"> --}}
            @foreach($eventos as $evento)
          <div class="col-md-6 col-lg-4 divEvento">
            <a class="evento-item d-block mx-auto" href="{{ url('/evento',$evento->id) }}">
              <div class="card">
                <img class="card-img-top" src="{{ asset('storage/' . $evento->championship->avatar) }}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">{{ $evento->nombre }}</h4>
                  <p class="card-text">{{ $evento->city->nombre }} - {{ $evento->fecha }}</p>
                </div>
              </div>
            </a>
          </div>
            @endforeach
    {{-- </section> --}}
  </article>

  <aside class="col-sm-4">
    @include('aside')
  </aside>

</section>  
</section> {{--container --}}

@endsection