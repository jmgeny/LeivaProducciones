<?php

namespace Leivaproducciones\Http\Controllers;

use Illuminate\Http\Request;
use Leivaproducciones\Evento;
use Leivaproducciones\Campeonato;

class PrincipalController extends Controller
{
	public function events() {

		$eventos = Evento::orderBy('fecha','ASC')->paginate(9);

		return view('events',compact('eventos'));
	}

	public function event($id) {
		
		$evento = Evento::find($id);

		return view('event',compact('evento'));
	}

	public function inicio() {

		$fechaSistema = new \DateTime();
		$fechaSistema = $fechaSistema->format('y-m-d');

		$eventos = Evento::orderBy('fecha','ASC')
					->where('fecha','>=',$fechaSistema)
					->paginate(3);

		$resultados = Evento::orderBy('fecha','DESC')
					->whereNotNull('resultado')
					->paginate(3);

		$campeonatos = Campeonato::all();

		return view('inicio', [
			"eventos" 		=> $eventos, 
			"campeonatos" 	=> $campeonatos,
			"resultados" 	=> $resultados
		]);
	}
}
