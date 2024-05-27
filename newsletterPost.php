<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./PHPMailerAutoload.php');

$mail = new PHPMailer;

$mail->SMTPDebug = 3; // Descomentar esta línea para habilitar la depuración

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => true,
        'verify_peer_name' => true,
        'allow_self_signed' => false
    )
);

$mail->Host = 'email.server.elhamiti.local'; // Servidor SMTP
$mail->SMTPSecure = 'TLS'; // Protocolo SSL o TLS
$mail->Port = 587; // Puerto de conexión al servidor SMTP
$mail->SMTPAuth = true; // Para habilitar o deshabilitar la autenticación
$mail->Username = 'admin@server.elhamiti.local'; // Usuario, normalmente el correo electrónico
$mail->Password = 'admin_elhamiti'; // Tu contraseña
$mail->From = 'admin@server.elhamiti.local'; // Correo electrónico que estamos autenticando
$mail->FromName = 'El hamiti News'; // Puedes poner tu nombre, el de tu empresa, nombre de tu web, etc.
$mail->CharSet = 'UTF-8'; // Codificación del mensaje

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];

        try {
            $mail->ClearAllRecipients();
            $mail->AddAddress($email);
            $mail->IsHTML(true);
            $mail->Subject = 'Bienvenido a la newsletter de EHN';

            $msg = file_get_contents("./emailTemplate.html");
            if ($msg === false) {
                throw new Exception("Error al leer la plantilla de correo");
            }
            $mail->Body = $msg;

            if ($mail->Send()) {
                header ('Location: ./aboutUs.php');
            } else {
                throw new Exception("Error al enviar el correo: " . $mail->ErrorInfo);
            }
        } catch (Exception $e) {
            echo "No se ha realizado el envío. Error: " . $e->getMessage();
        }
    } else {
        echo "Correo electrónico no válido";
    }
} else {
    echo "Método de solicitud no válido";
}
?>
