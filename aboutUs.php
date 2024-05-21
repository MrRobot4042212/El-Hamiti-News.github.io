<?php
session_start();
require('conn.php');

$lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'es';

if ($lang == 'en') {
    $contenido = 'aboutUs_EN.php';
    $titulo="El Hamiti News About";

} else {
    $contenido = 'aboutUs_ES.php';
    $titulo="El Hamiti News Nosotros";

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
<body>
<div id="contenido">
        <?php
        include($contenido);
        ?>
    </div>
</body>
</html>