<?php

require_once('./config.php');

error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];
        
        $mail->ClearAllRecipients();
        $mail->AddAddress($email);
        $mail->IsHTML(true);
        $mail->Subject = 'Bienvenido a la newsletter de EHN';
        
        $msg = file_get_contents("./emailTemplate.html");
        $mail->Body = $msg;
        
        if ($mail->Send()) {
            echo "Se ha realizado el envío";
        } else {
            echo "No se ha realizado el envío";
        }
    } else {
        echo "Correo electrónico no válido";
    }
}
?>

