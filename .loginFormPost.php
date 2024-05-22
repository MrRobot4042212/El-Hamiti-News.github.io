<?php

  require('conn.php');
$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT user, host FROM mysql.user WHERE user = '$user' AND authentication_string = PASSWORD('$pass')";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: ./.InsertBD.php");
    exit(); 
} else {
    echo "Nombre de usuario o contraseña incorrectos";
}
mysqli_close($con);
?>


<?php
    include('./.insertContent.php');
?>