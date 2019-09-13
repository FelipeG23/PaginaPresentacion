

 $(document).on("submit","#formularioContacto",function(e){
   e.preventDefault();
    var miurl="enviar_correo";
    var divresul="texto_notificacion";

    var data = new FormData();
 

     $.ajax({
            url: miurl,  
            type: 'GET',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function(){
              $("#"+divresul+"").html($("#cargador_empresa").html());                
            },
            success: function(data){
              var codigo='<div class="mailbox-attachment-info"><a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i>'+ data +'</a><span class="mailbox-attachment-size"> </span></div>';
              $("#"+divresul+"").html(codigo);
                        
            },
            error: function(data){
              console.log(data);
                
            }
        });



})