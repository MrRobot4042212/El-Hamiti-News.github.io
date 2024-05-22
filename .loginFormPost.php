<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('conn.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT password FROM redactores WHERE usuario = ?";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
    $stored_password_hash = $row['password'];
    if (password_verify($password, $stored_password_hash)) {
        echo "Inicio de sesión exitoso";
    } else {
        echo "Nombre de usuario o contraseña incorrectos";
    }
} else {
    echo "Nombre de usuario o contraseña incorrectos";
}

mysqli_close($con);
?>
