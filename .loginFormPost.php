<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('conn.php');
$user = $_POST['username'];
$pass = $_POST['password'];
$host = $_POST['host'];

$hashed_password = hash('sha256', $pass);

$sql = "SELECT user, host, authentication_string FROM mysql.user WHERE user = '$user' AND host = '$host'";
$result = mysqli_query($con, $sql);

if ($result === false) {
    echo "Error en la consulta: " . mysqli_error($con);
} else {

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        $stored_password_hash = $row['authentication_string'];
        

        if (hash_equals($stored_password_hash, $hashed_password)) {
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