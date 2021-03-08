<?php
	$destino= "lualorve@gmail.com";
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$asunto = $_POST["asunto"];
	$mensaje = $_POST["mensaje"];
	$contenido ="\nNombre: " . $nombre . "\n\nCorreo: " . $correo . "\n\nTema: " . $asunto . "\n\nMensaje: ". $mensaje;
	mail($destino, $asunto , $contenido);
	header("Location:gracias.html");



?>