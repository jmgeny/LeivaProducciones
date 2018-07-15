    <section class="evento bg-primary" id="resultado">
      <div class="container">
        <a href="{{ url('/allResultados') }}"><h2 class="text-center text-uppercase text-secondary mb-4">Resultados</h2></a>
        <div class="row">
            @foreach($resultados as $resultado)
          <div class="col-md-6 col-lg-4">
            <a class="evento-item d-block mx-auto" href="{{ url('/evento',$resultado->id) }}">
              <div class="card">
                  <h4 class="card-title">{{ $resultado->nombre }}</h4>
                <img class="card-img-top" src="{{ asset('storage/' . $resultado->championship->avatar) }}" alt="Card image">
                <div class="card-body">
                  <p class="card-text">{{ $resultado->city->nombre }} - {{ $resultado->fecha }}</p>
                </div>
              </div>    
            </a>
          </div>
            @endforeach
        </div>
      </div>
    </section>