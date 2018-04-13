      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Eventos</h2>
        <hr class="star-dark mb-5">
        <div class="row">
      @foreach($eventos as $evento)
          <div class="col-sm-4">
            <div class="card">
              <img class="card-img-top" src="{{$evento->avatar}}" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">{{$evento->nombre}}</h4>
                <p class="card-text">{{$evento->fecha}} - {{$evento->direccion}}</p>
                <a href="{{ route('eventos.show', $evento->id) }}" class="btn btn-primary">Ver Mas</a>
              </div>
            </div>            
          </div>        
      @endforeach
        </div>
      </div>