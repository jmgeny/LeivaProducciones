<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="shortcut icon" type="image/x-icon" href="img/logoLeiman.ico">

</head>
<body>

        <div class="row">
            <div class="col-sm-2">
                @include('navadmin')                
            </div>
            <div class="col-sm-10">
                @yield('content')
            </div>
        </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>    
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for this template -->
    <script src="{{ asset('js/stylish-portfolio.min.js') }}"></script>
</body>
</html>