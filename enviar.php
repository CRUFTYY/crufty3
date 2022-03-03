<?php
   $destino= "consultas@c.thecrufty.com";
   $nombre = $_POST["Nombre completo"];
   $correo = $_POST["Direccion de email"];
   $telefono = $_POST["Numero de telefono"];
   $mensaje = $_POST["Mensaje"];
   $Asunto = $_POST["Asunto"];
   $contenido = "Nombre completo: " $nombre . "\nDireccion de email: " . $correo . "\nNumero de telefono: " . $telefono . "\nMensaje: " $mensaje . "\nAsunto " $Asunto;
   mail($destino,"Contacto", $contenido);
?>
