    <section class="content-section bg-primary" id="resultado">
      <div class="container">
        <div class="content-section-heading text-center">
          {{-- {{ url('/allEventos') }} --}}
          <a href="{{ url('/allResultados') }}"><h2 class="mb-5">Resultados</h2></a>
        </div>
        <div class="row no-gutters">
          @foreach($resultados as $evento)
          <div class="col-lg-4">
                  <h2>{{ $evento->nombre }}</h2>
                  <p class="mb-0 pCaption">{{ $evento->city->nombre }} - {{ $evento->fecha }}</p>
            <a class="portfolio-item" href="{{ url('/resultado',$evento->id) }}">
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
