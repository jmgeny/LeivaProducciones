<?php

namespace leiman\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function evento($id) {
    	return view('evento');
    }

    public function allEventos() {
    	return view('allEventos');
    }

    public function resultado($id) {
    	return view('resultado');
    }

    public function allResultados () {
    	return view('allResultados');
    }
}
