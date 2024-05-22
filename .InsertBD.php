<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('./conn.php');
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Obtener el próximo ID disponible
$sql = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'elhamiti_news' AND TABLE_NAME = 'Noticias'";
$result = $con->query($sql);

$next_id = 1; // Valor predeterminado en caso de que la consulta falle
if ($result && $row = $result->fetch_assoc()) {
    $next_id = $row['AUTO_INCREMENT'];
}

$con->close(); // Usar $con para cerrar la conexión

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EHN Workspace</title>
    <link rel="shortcut icon" href="./data/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
    <section class="verificacion">
        <h1 class="row1">Buenos días, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <a class="logo"><img src="./data/img/logo.png" alt="company logo"></a>
        <h1 class="textRedactores">Redacción de noticias</h1>
        <form action="./.insertBDPost.php" method="POST">

            <label for="id_noticia">Nº de la noticia:</label><br>
            <input type="number" name="id_noticia" value="<?php echo $next_id; ?>" required disabled><br><br>

            <label for="titulo_noticia_es">Título de la noticia (ES):</label><br>
            <input type="text" name="titulo_noticia_es" required><br><br>

            <label for="titulo_noticia_en">Título de la noticia (EN):</label><br>
            <input type="text" name="titulo_noticia_en" required><br><br>

            <label for="fecha_noticia">Fecha de la noticia:</label><br>
            <input type="date" name="fecha_noticia" required><br><br>

            <label for="contenido_noticia_es">Contenido de la noticia (ES):</label><br>
            <textarea id="contenido_noticia_es" name="contenido_noticia_es" rows="4" cols="50" style="height: 100px;"></textarea><br><br>

            <label for="contenido_noticia_en">Contenido de la noticia (EN):</label><br>
            <textarea id="contenido_noticia_en" name="contenido_noticia_en" rows="4" cols="50" style="height: 100px;"></textarea><br><br>
            
            <label for="id_seccion">Nº de la sección:</label><br>
            <input type="number" name="id_seccion" required><br><br>
            
            <label for="urlImg">URL de la imagen:</label><br>
            <input type="text" name="urlImg" placeholder="./data/img/noticas/-archivo-"><br><br>
            <input type="submit" value="Publicar">
        </form>

        <a class="textButton" href="logout.php">Cerrar sesión</a>
    </section>
</body>
</html>
