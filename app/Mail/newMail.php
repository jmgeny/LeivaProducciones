<?php

namespace leiman\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;

class newMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request)
    {
        return $this->markdown('mail',['msg'=>$request->message,
                                'mailde'=>$request->to,
                              'nombrede'=>$request->nombre,
                            'apellidode'=>$request->apellido])->to('porteno.bragado@gmail.com');
        // to('leivaproducciones@yahoo.com.ar');
    }
}
