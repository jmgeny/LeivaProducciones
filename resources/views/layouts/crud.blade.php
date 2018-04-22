<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Organizamos todo tipo de evento deportivo.">
    <meta name="author" content="Juan Manuel Geny">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->

    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style_crud.css" rel="stylesheet" >
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> --}}

    

   </head>

  <body id="page-top">
    
    <section class="container py-3">
      <section class="row">
        <div class="col-sm-12">
          <h1 class="page-header text-center">@yield('titulo')</h1>
        </div>
        @yield('content')
      </section>
    </section>
      
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  </body>

</html>