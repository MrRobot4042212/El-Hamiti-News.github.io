<?php
session_start();
require('conn.php');
$consulta = "SELECT * FROM Noticias INNER JOIN Secciones ON Secciones.ID_seccion = Noticias.ID_seccion";
$result = $con->query($consulta);

$consulta2 = "SELECT * FROM Secciones";
$result2 = $con->query($consulta2);

$titulo = "El Hamiti News";

require('conn.php');
if (isset($_GET['lang'])) {
    setcookie('lang', $_GET['lang'], 0, "/");
        $lang = $_GET['lang'];
} else {
    $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'es';
}

if ($lang == 'en') {
    $contenido = 'index_EN.php';
} else {
    $contenido = 'index_ES.php';
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="shortcut icon" href="./data/img/icon.png" type="image/x-icon">
</head>
<body id="body">
    <main class="lenguaje <?php echo isset($_GET['lang']) ? 'hidden' : ''; ?>">
        <a href="./index.php" class="logo"><img src="./data/img/logo.png" alt="logo de la empresa"></a>
        <h1>Bienvenido al noticiero "El Hamiti News"</h1>
        <h2>Por favor seleccione su idioma</h2>
        <section>
            <ul class="contenedorIdiomas">
                <li>
                    <form action="index.php" method="get">
                        <input type="hidden" name="lang" value="es">
                        <button type="submit">Español</button>
                    </form>
                </li>
                <li>
                    <form action="index.php" method="get">
                        <input type="hidden" name="lang" value="en">
                        <button type="submit">English</button>
                    </form>
                </li>
            </ul>
        </section>
    </main>

    <div id="contenido">
        <?php
        include($contenido);
        ?>
    </div>

      
    <script src="./scripts/jquery-3.7.1.min.js"></script>
    <script src="./scripts/scripts.js"></script>
  
</body>
</html>

