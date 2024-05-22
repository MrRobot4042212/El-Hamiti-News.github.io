<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('conn.php');
$user = $_POST['username'];
$pass = $_POST['password'];
$host = $_POST['host'];

// Consulta para seleccionar el usuario y el hash de la contraseña de la base de datos
$sql = "SELECT user, host, authentication_string FROM mysql.user WHERE user = ? AND host = ?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "ss", $user, $host);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result === false) {
    echo "Error en la consulta: " . mysqli_error($con);
} else {
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $stored_password_hash = $row['authentication_string'];

        // Verificar si la contraseña proporcionada coincide con el hash almacenado
        if (password_verify($pass, $stored_password_hash)) {
            header("Location: ./.insertDB.php");
            exit(); 
        } else {
            echo "Nombre de usuario, contraseña o host incorrectos";
        }
    } else {
        echo "Nombre de usuario, contraseña o host incorrectos";
    }
}

// Cerrar la conexión
mysqli_close($con);
?>
