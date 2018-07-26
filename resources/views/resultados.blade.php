    <section class="evento bg-primary" id="resultado">
      <div class="container">
        <a href="{{ url('/allResultados') }}"><h2 class="text-center text-uppercase text-secondary mb-4">Resultados</h2></a>
        <div class="row">
            @foreach($resultados as $resultado)
          <div class="col-md-6 col-lg-4">
            <a class="evento-item d-block" href="{{ url('/evento',$resultado->id) }}">
              
               <div class="card text-center">
                  <div class="card-title">
                    <p class="card-text">{{ $resultado->nombre }}</p>
                    <p class="card-text">{{ $resultado->city->nombre }} - {{ $resultado->fecha }}</p>
                  </div>
                <div class="card-body">
                  <img class="card-img-top" src="{{ Storage::url($resultado->championship->avatar) }}" alt="img">
                </div>
              </div>

            </a>
            </div>
            @endforeach
        </div>
      </div>
    </section>