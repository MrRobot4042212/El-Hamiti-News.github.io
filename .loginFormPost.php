<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('conn.php');
$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT user, host FROM mysql.user WHERE user = '$user' AND authentication_string = '$pass'";
$result = mysqli_query($con, $sql);

if ($result === false) {
    echo "Error en la consulta: " . mysqli_error($con);
} else {
    if (mysqli_num_rows($result) > 0) {
        header("Location: ./.insertDB.php");
        exit();
    } else {
        echo "Nombre de usuario o contraseña incorrectos";
    }
}

// Cerrar la conexión
mysqli_close($con);
?>