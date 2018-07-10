<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Organizado de eventos deportivos">
    <meta name="author" content="Juan Manuel Geny">

    <title>@yield('title')</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"> --}}
    <!-- Bootstrap core CSS 4-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/freelancer.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    
    {{-- iconos de botones --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Plugin CSS -->
    {{-- <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"> --}}
    {{-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> --}}

  </head>

  <body id="page-top">
    
      @yield('content')
   
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->

    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="jquery/jquery.easing.min.js"></script>
    <script src="jquery/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    {{-- <script src="js/jqBootstrapValidation.js"></script> --}}
    {{-- <script src="js/contact_me.js"></script> --}}

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.js"></script>

  </body>

</html>