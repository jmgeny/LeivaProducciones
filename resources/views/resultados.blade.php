    <section class="evento bg-primary" id="resultado">
      <div class="container">
        <a href="{{ url('/allResultados') }}"><h2 class="text-center text-uppercase text-secondary mb-4">Resultados</h2></a>
        <div class="row">
            @foreach($resultados as $resultado)
          <div class="col-md-6 col-lg-4">
            <a class="evento-item d-block mx-auto" href="{{ url('/evento',$resultado->id) }}">
              <div class="panel panel-default">
                <div class="panel-heading">{{ $resultado->nombre }}</div>
                <div class="panel-body">Panel Content</div>
                <div class="panel-footer">Panel Footer</div>
              </div>
            </a>
          </div>
            @endforeach
        </div>
      </div>
    </section>