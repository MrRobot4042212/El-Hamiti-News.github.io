<?php

require_once('./PHPMailerAutoload.php');

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;

$mail->IsSMTP();
$mail->Host = '10.5.2.4'; // Servidor SMTP
$mail->SMTPSecure = 'tls'; // Protocolo SSL o TLS
$mail->Port = 587; // Puerto de conexión al servidor SMTP
$mail->SMTPAuth = true; // Para habilitar o deshabilitar la autenticación
$mail->Username = 'admin@server.elhamiti.local'; // Usuario, normalmente el correo electrónico
$mail->Password = 'admin_elhamiti'; // Tu contraseña
$mail->From = 'admin@server.elhamiti.local'; // Correo electrónico que estamos autenticando
$mail->FromName = 'El hamiti News'; // Puedes poner tu nombre, el de tu empresa, nombre de tu web, etc.
$mail->CharSet = 'UTF-8'; // Codificación del mensaje

?>
