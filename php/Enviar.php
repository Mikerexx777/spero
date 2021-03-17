<?php
$destino = "ruiz.miguel.1403@gmail.com";
$nombre = $_POST("nombre");
$email = $_POST("email");
$telefono = $_POST("telefono");
$mensaje = $_POST("mensaje");
$header = "Mensaje envido desde e sitio web de Macroproyecyos";
$contenido = "nombre: " . $nombre . "\nemail:" . $email . "\ntelefono:" . $telefono . "\nmensaje:" . $mensaje;
mail($destino,"contacto", $contenido, $header);
echo "<script>alert("correo enviado exitosamente")</script>";
echo "<script> setTimeout(\"location.href="contact.html"\",1000)</script>";
 ?>
