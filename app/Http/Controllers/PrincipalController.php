<?php

namespace Leivaproducciones\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
	public function eventos () {
		return view('eventos');
	}
}
