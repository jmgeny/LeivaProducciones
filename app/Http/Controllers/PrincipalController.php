<?php

namespace Leivaproducciones\Http\Controllers;

use Illuminate\Http\Request;
use Leivaproducciones\Evento;

class PrincipalController extends Controller
{
	public function eventos () {
		return view('eventos');
	}

	public function inicio() {

		$eventos = Evento::orderBy('fecha','ASC')->paginate(6);

		return view('inicio', compact('eventos'));
	}
}
