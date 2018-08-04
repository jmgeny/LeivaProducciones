    <section class="content-section" id="evento">
      <div class="container">
        <div class="content-section-heading text-center">
          {{-- {{ url('/allEventos') }} --}}
          <a href="{{ url('/allEventos') }}"><h2 class="mb-5">Proximos Eventos</h2></a>
        </div>
        <div class="row no-gutters">
          @foreach($eventos as $evento)
          <div class="col-lg-4">
                  <h2>{{ $evento->nombre }}</h2>
                  <p class="mb-0 pCaption">{{ $evento->city->nombre }} - {{ $evento->fecha }}</p>
            <a class="portfolio-item" href="{{ url('/evento',$evento->id) }}">
              <span class="caption">
                <span class="caption-content">
                  <p class="pCaption">ver detalle</p>
                </span>
              </span>
              <img class="img-fluid" src="{{ Storage::url($evento->championship->avatar) }}" alt="">
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>    
{{--     <section class="evento" id="evento">
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
    </section> --}}