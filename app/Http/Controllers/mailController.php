<?php

namespace leiman\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use leiman\mail\newMail;

class mailController extends Controller
{
    public function send() 
    {
    	// Mail::send(['text'=>'contacto'],['name'=>'Jorge Leiva'],function($message){
    	// 	$message->to('juanmanuel.geny@gmail.com','to juanmanuel')->subject('Mail Test Leiva');
    	// 	$message->from('juanmanuel.geny@gmail.com','Leiva Producciones');
    	// });
    	Mail::send(new newMail());
    	return back();
    }

    
}
