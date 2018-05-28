<?php
header('Content-type: application/json');

if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
   isset($_POST['email']) && !empty($_POST['email']) &&
   isset($_POST['mensaje']) && !empty($_POST['mensaje'])){
   
   $destino = "matiespinoza.h@gmail.com";
   $nombre = $_POST['nombre'];
   $email = $_POST['email'];
   $mensaje = $_POST['mensaje'];
   
   $contenido = "Correo de contacto desde matias-espinoza.com";
   $contenido .= "\nNombre: ". $nombre;
   $contenido .= "\nEmail: ". $email;
   $contenido .= "\nMensaje: ". $mensaje;
   
   mail($destino, "Contacto Portafolio ". $nombre, $contenido);
   return print(json_encode(array('ok')));
}

return print(json_encode(array('error')));