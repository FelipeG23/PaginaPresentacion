<?php

namespace App\Http\Controllers;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ControladorMail extends Controller
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
	
     public function enviar(Request $request){
    
    $pathToFile="";
    $containfile=false; 
    
    $destinatario=$request->input("email");
    $asunto=$request->input("asunto");
    $contenido=$request->input("mensaje");

   
    $data = array('contenido' => $contenido);
	$r= Mail::send('contacto', $data, function ($message) use ($asunto,$destinatario,  $containfile,$pathToFile) {
        $message->from('pruebassiadoc@gmail.com', 'pruebas123');
        $message->to($destinatario)->subject($asunto);
    });
        
    if($r){             
            return ("msj","Correo Enviado correctamente");   
    }else{            
         return ("msj","hubo un error vuelva a intentarlo");  
    }

   
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contacto');
    }
}
