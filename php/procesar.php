<?php

$nombre = $_GET['nombre'];
$apellidos = $_GET["apellidos"];
$email = $_GET["email"];
$pais = $_GET["pais"];
$mensaje = $_GET["mensaje"];

$destinatario = "thisisrdmusic@gmail.com";
$asunto = "Respuesta de Lula";

$carta = "Nombre completo: $nombre . $apellidos \n";
$carta .= "Email: $email\n";
$carta .= "De: $pais \n";
$carta .= "Mensaje: $mensaje";

mail($destinatario, $asunto, $carta);
header('location:index.html');

?>
