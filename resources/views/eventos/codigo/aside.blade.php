{{-- <ul class="nav flex-column text-left">
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/index') }}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('editEventos.index')}}">Evento</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('editCampeonatos.index')}}">Campeonatos</a>
  </li>  
</ul> --}}

<ul class="nav nav-pills nav-stacked">
    <li><a href="{{url('/index')}}">Inicio</a></li>
    <li><a href="{{route('editEventos.index')}}">Eventos</a></li>
    <li><a href="{{route('editCampeonatos.index')}}">Campeonatos</a></li>
</ul>