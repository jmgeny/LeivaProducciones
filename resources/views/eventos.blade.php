    <section class="evento" id="evento">
      <div class="container">
        <a href="{{ url('/allEventos') }}"><h2 class="text-center text-uppercase text-secondary mb-4">Eventos</h2></a>
        <div class="row">
            @foreach($eventos as $evento)
          <div class="col-md-6 col-lg-4">
            <a class="evento-item d-block mx-auto" href="{{ url('/evento',$evento->id) }}">
              <div class="card">
                <img class="card-img-top" src="img/img_avatar1.png" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">{{ $evento->nombre }}</h4>
                  <p class="card-text">{{ $evento->city->nombre }} - {{ $evento->fecha }}</p>
                </div>
              </div> 
            </a>
            </div>
            @endforeach
        </div>
      </div>
    </section>