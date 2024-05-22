<?php
require('./conn.php');
session_start();

if (!isset($_SESSION['username'])) {

    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EHN Workspace</title>
</head>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <section>
        <form action="./.insertDBPost.php">


        </form>
    </section>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>