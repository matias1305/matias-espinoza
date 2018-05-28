$(document).ready(function(){
   $('.form-contacto').bind('submit', function(){

      $.ajax({
         type: $(this).attr('method'),
         url: $(this).attr('action'),
         data: $(this).serialize(),
         success: function(resp) {
            if(resp == 'ok'){
               $('#alerta')
                  .removeClass('d-none')
                  .removeClass('alert-danger')
                  .removeClass('alert-success')
                  .addClass('alert-success');
               
               $('.respuesta').html('Enviado');
               $('.mensaje-alert').html("enviado correctamente");
            }else {
               $('#alerta')
                  .removeClass('d-none')
                  .removeClass('alert-danger')
                  .removeClass('alert-success')
                  .addClass('alert-danger');
               
               $('.respuesta').html('Error');
               $('.mensaje-alert').html("al enviar su mensaje");
            }
         },
         error: function(){
            $('#alerta')
               .removeClass('d-none')
               .removeClass('alert-danger')
               .removeClass('alert-success')
               .addClass('alert-danger');
               
            $('.respuesta').html('Error');
            $('.mensaje-alert').html("al enviar su mensaje");
         }
      });

      return false;
   });
});