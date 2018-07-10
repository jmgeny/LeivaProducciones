@extends('layouts.vistas')

@section('title','Eventos')

@section('content')
<section class="container-fluid">
		@include('navbar2')
</section>

<section class="container">
	<h2>Resultado</h2>
<section class="row">
	<section class="col-sm-8">
<ul class="nav nav-tabs">
  <li><a data-toggle="tab" href="#home">Home</a></li>
  <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
  <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade">

    <p>Some content.</p>
  </div>
  <div id="menu1" class="tab-pane fade">

    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">

    <p>Some content in menu 2.</p>
  </div>
</div>

	</section>
	<section class="col-sm-4">
		@include('aside')
	</section>

</section>	
</section> {{--container --}}

@endsection