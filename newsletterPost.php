<?php

require_once('./config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $to = $email;
    $subject = "Bienvenido a nuestra Newsletter";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: admin@server.elhamiti.local" . "\r\n";

    $htmlContent = file_get_contents("./emailTemplate.html");

    if (mail($to, $subject, $htmlContent, $headers)) {
        echo "Gracias por suscribirte. Revisa tu correo para ver el mensaje de bienvenida.";
    } else {
        echo "Hubo un error al enviar el correo. Por favor, inténtalo de nuevo.";
    }
}
?>
