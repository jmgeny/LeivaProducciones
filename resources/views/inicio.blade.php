<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Organizamos todo tipo de evento deportivo.">
    <meta name="author" content="Juan Manuel Geny">

    <title>Leiva Producciones</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/freelancer.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom fonts for this template -->
    {{-- <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"> --}}

    {{-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> --}}

    {{-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css"> --}}

    <!-- Plugin CSS -->
    {{-- <link href="css/magnific-popup.css" rel="stylesheet" type="text/css"> --}}

    <!-- Custom styles for this template -->
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        {{-- <a class="navbar-brand js-scroll-trigger" href="#page-top">LP</a> --}}
          <div class="col-md-4 mb-5 mb-lg-0">
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
               <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-whatsapp"></i>
                </a>
              </li>
            </ul>
          </div>        
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Eventos</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#resultados">Resultados</a>
            </li>            
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Nosotros</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#servicios">Servicios</a>
            </li>            
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <h1 class="text-uppercase mb-0">Leiva Producciones</h1>
        <hr class="star-dark mb-5">
        <h2 class="font-weight-light mb-0">Organizamos todo tipo de evento deportivo</h2>
      </div>
    </header>

    <!-- Evento Section -->
    <section class="portfolio" id="portfolio">
      @include('eventos');
    </section>

    <!-- Resultados Section -->
    <section class="portfolio bg-primary" id="resultados">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Resultados</h2>
        <hr class="star-dark mb-5">
        <div class="row">
              <h3>Detalle de resultados</h3>
        </div>
      </div>
    </section>    

    <!-- Nosotros Section -->
    <section class="portfolio" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Nosotros</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead"><span style="font-weight: bold">Leiva Producciones Deportivas</span> es una Empresa formada   por todo un grupo familiar. Estamos en el Mercado desde el a&ntilde;o 1991.   Espec&iacute;ficamente nos dedicamos a diagramar, medir y organizar diferentes tipos de   Eventos federados y sociales&nbsp;(Pruebas Atl&eacute;ticas,  Triatl&oacute;n, Duatl&oacute;n, MTB, Nataci&oacute;n aguas abiertas, Carreras de Aventura, Cross y  Deportes Combinados).</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">&nbsp;Organizaci&oacute;n de Circuitos&nbsp;de Freestyle  bikes Internacional, administraci&oacute;n y coordinaci&oacute;n&nbsp;de Natatorios, Clubes y  Playas.&nbsp;Contrataci&oacute;n de Personal Profesional. &nbsp;Tenemos en nuestra empresa todo  el soporte para alquiler de estructuras a todo tipo de empresas y entes  municipales, provinciales.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Servicios -->
    <section class="portfolio bg-primary" id="servicios">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Servicios</h2>
        <hr class="star-dark mb-5">
        <div class="row">
              <h3>LEIMAN</h3>
        </div>
      </div>
    </section>

    <!-- Contacto Section -->
    <section class="bg-primary" id="contact">
        <div class="container bg-grey">
          <h2 class="text-center">Contacto</h2>
          <hr class="star-dark mb-5">
          <div class="row">
            <div class="col-sm-5">
              <p>Póngase en contacto con nosotros y nos pondremos en contacto con usted dentro de las 24 horas</p>
              <p><span class="glyphicon glyphicon-map-marker"></span> Argentina</p>
              <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
              <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p> 
            </div>
            <div class="col-sm-7">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
              </div>
              <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
              <div class="row">
                <div class="col-sm-12 form-group">
                  <button class="btn btn-default pull-right" type="submit">Send</button>
                </div>
              </div> 
            </div>
          </div>
        </div>      
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <p class="lead mb-0">2215 John Daniel Drive
              <br>Clark, MO 65243</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
{{--             <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
               <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-whatsapp"></i>
                </a>
              </li>
            </ul> --}}
          </div>
          <div class="col-md-4">
            <p class="lead mb-0">Implementado con Laravel y Bootstrap
              <a href="http://genyparatriatlon.com.ar">Desarrollador</a>.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright text-center text-white">
      <div class="container">
        <small>Juan Manuel Geny - 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="ja/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>