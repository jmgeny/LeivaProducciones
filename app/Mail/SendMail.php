<?php

namespace leiman\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;

class SendMail extends Mailable
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
        return $this->view('mail',['msg'=>$request->message,
                                'mailde'=>$request->to,
                              'nombrede'=>$request->nombre,
                            'apellidode'=>$request->apellido])->to('leivaproducciones@yahoo.com.ar');
    }
}
