<?php

require_once('./config.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail->ClearAllRecipients( );
    $mail->AddAddress($_POST['email']);
    $mail->IsHTML(true);
    $mail->Subject = 'Bienvenido a la newsletter de EHN';
    $msg = file_get_contents("./emailTemplate.html");
    $mail->Body    = $msg;
    $mail->Send();
    if ($mail->Send()) {
        echo "se a realizado el envio";
    }
    else {
        echo "no se a realizado el envio";
    }
}
?>
