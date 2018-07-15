    <section class="evento" id="evento">
      <div class="container">
        <a href="{{ url('/allEventos') }}"><h2 class="text-center text-uppercase text-secondary mb-4">Eventos</h2></a>
        <div class="row">
            @foreach($eventos as $evento)
          <div class="col-md-6 col-lg-4">
            <a class="evento-item d-block mx-auto" href="{{ url('/evento',$evento->id) }}">
              <div class="card">
                  <h4 class="card-title">{{ $evento->nombre }}</h4>
                <img class="card-img-top" src="{{ asset('storage/' . $evento->championship->avatar) }}" alt="img">
                <div class="card-body">
                  <p class="card-text">{{ $evento->city->nombre }} - {{ $evento->fecha }}</p>
                </div>
              </div> 
            </a>
            </div>
            @endforeach
        </div>
      </div>
    </section>