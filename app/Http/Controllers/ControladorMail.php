<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;  

class ControladorMail extends Controller
{
	
	  public function __construct()
    {
        //
    }
	 public function build()
    {
        return $this->view('contacto');
    }
	
     public function enviar(Request $request){
    
    $pathToFile="";
    $containfile=false; 
    
    $destinatario=$request->input("email");
    $asunto=$request->input("asunto");
    $contenido=$request->input("mensaje");

   
    $data = array('contenido' => $contenido);
	$r= Mail::send('contacto',  compact('data'), function ($message) use ($asunto,$destinatario) {
        $message->from('pruebassiadoc@gmail.com', 'pruebas123');
        $message->to($destinatario)->subject($asunto);
		
		$message->to(env('MAIL_USERNAME'));
        $message->subject($data['subject']);
		
		
    });
        
    if($r){             
            return ("Correo Enviado correctamente");   
    }else{            
         return ("hubo un error vuelva a intentarlo");  
    }

   
    }
}
