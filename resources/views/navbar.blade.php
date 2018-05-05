      <div class="container">
        {{-- <a class="navbar-brand js-scroll-trigger" href="#page-top">LP</a> --}}
        {{-- <a href="{{ url('/index') }}" class="btn btn-outline-light btn-social text-center">LP</a> --}}
          <div class="col-md-4 mb-5 mb-lg-0">
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/www.leiman/" target="new">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li> 
               <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-whatsapp"></i>
                </a>
              </li>
            </ul>
          </div>        
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Eventos</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#resultados">Resultados</a>
            </li>            
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Nosotros</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="dropdown nav-item mx-0 mx-lg-1">
              <a class="dropdown-toggle nav-link py-3 px-0 px-lg-3 rounded" data-toggle="dropdown" href="#">Admin<span class="caret"></span>
              </a>
              @if (Auth::guest())
                <ul class="dropdown-menu">
                  <li><a href="{{route('login')}}">Ingresar</a></li>
                  <li><a href="{{route('register')}}">Registrarse</a></li>
                </ul>
              @else
                <ul class="dropdown-menu">
                  <li><a href="{{ route('logout') }}" class="dropdown-item"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Salir
                                </a></li>
                  <li><a class="dropdown-item" href="{{url('/home')}}">Admin</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                    </form>                  
                </ul>
              @endif

             </li>            

          </ul>
        </div>
      </div>