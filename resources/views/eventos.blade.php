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
                  <p class="spanCaption">Inscribite</p>
                </span>
              </span>
              <img class="img-fluid" src="{{ Storage::url($evento->championship->avatar) }}" alt="">
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>    
