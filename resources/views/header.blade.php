{{-- <header class="masthead bg-header text-white text-center">
	<div class="container">
		<img class="mb-0 imgHeader mx-auto" src="img/logoLeiman.png" alt="">
        <h1 class="text-uppercase mb-0">Leiva Producciones</h1>
        <h2 class="font-weight-light mb-0">Organizamos todo tipo de evento deportivo</h2>
    </div>
</header>
	@include('carrusel') --}}

    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <img src="img/logoLeiman.png" alt="leiman">
      <div class="imgHeader">
        <h1 class="mb-1">Leiva Producciones</h1>
        <h3 class="mb-5">
          <em>Organizamos todo tipo de evento deportivo</em>
        </h3>
      </div>
        @include('redes')
        {{-- <a class="btn btn-primary btn-xl js-scroll-trigger" href="https://www.facebook.com/www.leiman">Facebook</a> --}}
      </div>
      <div class="overlay"></div>
    </header>
    <div class="row text-center carrousel bg-primary">
      @include('carrusel')
    </div>

