<nav class="navbar bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="{{ url('/') }}">LEIMAN</a>
    </li>
@guest
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Usuario
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ route('login') }}">Ingresar</a>
        <a class="dropdown-item" href="{{ route('register') }}">Registrar</a>
      </div>
    </li>
@else

        <a class="nav-link" href="{{route('event.index') }}">Evento</a>
        <a class="nav-link" href="{{route('championship.index') }}">Campeonato</a>

    {{-- Conexion --}}
                                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
@endguest

  </ul>
</nav>