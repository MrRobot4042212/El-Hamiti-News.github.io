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
    <link rel="shortcut icon" href="./data/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
    <h1>Buenos dias, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <section class="verificacion">
        <a class="logo"><img src="./data/img/logo.png" alt="company logo" ></a>
        <h1 class="textRedactores">Redaccion de noticias</h1>

        <form action="./.insertBDPost.php">
            <label for="id_noticia">Nº de la noticia:</label><br>
            <input type="number" name="id_noticia" required disabled><br><br>

            <label for="titulo_noticia_es">Titulo de la noticia (ES):</label><br>
            <input type="text" name="titulo_noticia_es" required><br><br>

            <label for="titulo_noticia_en">Titulo de la noticia (EN): </label><br>
            <input type="te" name="titulo_noticia_en" required><br><br>

            <label for="fecha_noticia">Fecha de la noticia:</label><br>
            <input type="date" name="fecha_noticia" required><br><br>

            <label for="contenido_noticia_es">Contenido de la noticia (ES):</label><br>
            <textarea id="contenido_noticia_es" name="contenido_noticia_es" rows="4" cols="50" style="height: 100px;"></textarea><br><br>

            <label for="contenido_noticia_en">Contenido de la noticia (EN):</label><br>
            <textarea id="contenido_noticia_en" name="contenido_noticia_en" rows="4" cols="50" style="height: 100px;"></textarea><br><br>
            
            <label for="id_seccion">Nº de la seccion</label><br>
            <input type="number" name="id_seccion" required disabled><br><br>
            
            <label for="urlImg">Url de la imagen</label><br>
            <input type="text" name="urlImg" placeholder="./data/img/noticas/-archivo-"><br><br>

            <input type="submit" value="Publicar">
        </form>
    </section>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>