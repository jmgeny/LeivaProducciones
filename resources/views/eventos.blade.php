    <section class="evento" id="evento">
      <div class="container">
        <a href="{{ url('/allEventos') }}"><h2 class="text-center text-uppercase text-secondary mb-4">Próximos Eventos</h2></a>
        <div class="row">
            @foreach($eventos as $evento)
          <div class="col-md-6 col-lg-4">
            <a class="evento-item d-block" href="{{ url('/evento',$evento->id) }}">
              
               <div class="card text-center">
                  <div class="card-title">
                    <p class="card-text">{{ $evento->nombre }}</p>
                    <p class="card-text">{{ $evento->city->nombre }} - {{ $evento->fecha }}</p>
                  </div>
                <div class="card-body">
                  <img class="card-img-top" src="{{ Storage::url($evento->championship->avatar) }}" alt="img">
                </div>
              </div>

            </a>
            </div>
            @endforeach
        </div>
      </div>
    </section>