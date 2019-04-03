<!-- Codigo php que sirve para enviar el mensaje de correo de la página del contacto-->
<?php 
	error_page uri = $405; 
/* Campos que se recuperan del formulario lleno por el usuario en la página de contacto excepto el correo destinado, ese ya vendra predefinido desde código fuente */
	$destino= "bala99100pk@gmail.com";
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
	mail($destino, "Contacto", $contenido);
	header("Location:index.html");

?>