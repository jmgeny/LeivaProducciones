<nav class="navbar secNav">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">LEIMAN</a>
    </div>
    <div class="collapse navbar-collapse pull-right" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/allEventos') }}">EVENTO</a></li>
        <li><a href="{{ url('/allResultados') }}">RESULTADO</a></li>
      </ul>
    </div>
  </div>
</nav>