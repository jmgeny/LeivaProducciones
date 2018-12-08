<?php

namespace leiman\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use leiman\mail\newMail;
use leiman\Http\Requests\MailRequest;

class mailController extends Controller
{
    public function send(MailRequest $request) 
    {
    	Mail::send(new newMail());
    	return back();
    }

    
}
