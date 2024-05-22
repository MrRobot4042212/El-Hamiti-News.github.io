<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('conn.php');
// Recuperar datos del formulario
$user = $_POST['username'];
$pass = $_POST['password'];

// Consulta para verificar las credenciales
$sql = "SELECT user, host FROM mysql.user WHERE user = '$user' AND authentication_string = PASSWORD('$pass')";

$result = mysqli_query($con, $sql);

// Verificar si la consulta se ejecutó correctamente
if ($result === false) {
    echo "Error en la consulta: " . mysqli_error($con);
} else {
    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if (mysqli_num_rows($result) > 0) {
        // Inicio de sesión exitoso, redirigir a otra página
        header("Location: otra_pagina.php");
        exit(); // Asegura que el script no siga ejecutándose después de la redirección
    } else {
        echo "Nombre de usuario o contraseña incorrectos";
    }
}

// Cerrar la conexión
mysqli_close($con);
?>