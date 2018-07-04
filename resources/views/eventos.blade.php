    <section class="evento" id="evento">
      <div class="container">
        <a href="{{ url('/allEventos') }}"><h2 class="text-center text-uppercase text-secondary mb-4">Eventos</h2></a>
        <div class="row">
            @foreach($eventos as $evento)
          <div class="col-md-6 col-lg-4">
            <a class="evento-item d-block mx-auto" href="{{ url('/evento',$evento->id) }}">
              <div class="panel panel-default">
                <div class="panel-heading">{{ $evento->nombre }}</div>
                <div class="panel-body">Panel Content</div>
                <div class="panel-footer">Panel Footer</div>
              </div>
            </a>
            </div>
            @endforeach
        </div>
      </div>
    </section>