<?php

namespace leiman\Http\Controllers;

use Illuminate\Http\Request;
use leiman\Event;

class PrincipalController extends Controller
{
    public function index(){
        
        $fechaSistema = new \DateTime();
        $fechaSistema = $fechaSistema->format('y-m-d');

        $eventos = Event::orderBy('fecha','ASC')
                    ->where('fecha','>=',$fechaSistema)
                    ->paginate(6);
        
        $resultados = Event::orderBy('fecha','DESC')
                    ->whereNotNull('resultado')
                    ->paginate(6);

        // return view('index',compact('eventos'));
        return view('index',[
            "eventos" => $eventos,
            "resultados" => $resultados
        ]);            
    }

    public function evento($id) {

        $evento = Event::find($id);
    	return view('evento',compact('evento'));
    }


    public function allEventos() {
        
        $fechaSistema = new \DateTime();
        $fechaSistema = $fechaSistema->format('y-m-d');

        $eventos = Event::orderBy('fecha','ASC')
                    ->where('fecha','>=',$fechaSistema)
                    ->paginate(9);

    	return view('allEventos',compact('eventos'));
    }

    public function resultado($id) {

        $resultado = Event::find($id);
    	return view('resultado',compact('resultado'));
    }

    public function allResultados () {
        $fechaSistema = new \DateTime();
        $fechaSistema = $fechaSistema->format('y-m-d');

        $resultados = Event::orderBy('fecha','ASC')
                    ->whereNotNull('resultado')
                    ->paginate(9);

        return view('allResultados',compact('resultados'));    
    }
}
