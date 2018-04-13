<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Organizamos todo tipo de evento deportivo.">
    <meta name="author" content="Juan Manuel Geny">

    <title>Leiva Producciones</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

{{-- NUEVO --}}
<!-- Latest compiled and minified CSS -->
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}

{{-- NUEVO --}}
    <link href="css/freelancer.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style_crud.css">
  

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      @include('navbar')
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      @include('header')
    </header>

    <!-- Evento Section -->
    <section class="portfolio" id="portfolio">
      @include('eventos') 
    </section>

    <!-- Resultados Section -->
    <section class="portfolio bg-primary" id="resultados">
      @include('resultados')
    </section>    

    <!-- Nosotros Section -->
    <section class="portfolio" id="about">
      @include('nosotros')
    </section>

    <!-- Servicios -->
    <section class="portfolio bg-primary" id="servicios">
      @include('servicios')
    </section>

    <!-- Contacto Section -->
    <section class="portfolio" id="contact">
      @include('contacto')      
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
            <p class="lead mb-0">Juan Manuel Geny - 2018</p>
          </div>
          <div class="col-md-4">
            <p class="lead mb-0">Implementado con Laravel y Bootstrap
              <a href="http://genyparatriatlon.com.ar">Desarrollador</a>.</p>
          </div>
        </div>
      </div>
    </footer>

{{--     <div class="copyright text-center text-white">
      <div class="container">
        <small>Juan Manuel Geny - 2018</small>
      </div>
    </div> --}}

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
    <script src="js/freelancer.js"></script>
    {{-- caroucel --}}
  </body>

</html>