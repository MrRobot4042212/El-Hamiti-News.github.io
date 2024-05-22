<?php
// Habilitar la visualización de errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir el archivo de conexión a la base de datos
require('conn.php');

// Obtener el nombre de usuario y contraseña del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para obtener el hash de la contraseña del usuario
$query = "SELECT idRedactor, password FROM redactores WHERE usuario = ?";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Verificar si se encontró el usuario
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $stored_password_hash = $row['password'];

    // Verificar si la contraseña coincide
    if (password_verify($password, $stored_password_hash)) {
        // Inicio de sesión exitoso
        echo "Inicio de sesión exitoso para el usuario: $username";
        // Aquí podrías redireccionar al usuario a la página que desees
    } else {
        // Contraseña incorrecta
        echo "Contraseña incorrecta";
    }
} else {
    // Nombre de usuario incorrecto
    echo "Nombre de usuario incorrecto";
}

// Cerrar la conexión a la base de datos
mysqli_close($con);
?>

