<?php
$nombre = $_POST['nombre'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$direction = $_POST['direction'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje = "su telefono es " . $telephone . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Su direccion es: " . $direction . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'davidguillermo11@outlook.com';
$asunto = 'mensaje de mi pagina web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>
