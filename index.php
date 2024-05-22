
<?php
session_start();
require('conn.php');

$titulo = "El Hamiti News";

if (isset($_GET['lang'])) {
  $_SESSION['lang'] = $_GET['lang'];
}
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'es';


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
<body>
    <main class="lenguaje <?php echo isset($_GET['lang']) ? 'hidden' : ''; ?>">
        <a href="./index.php" class="logo"><img src="./data/img/logo.png" alt="logo de la empresa"></a>
        <h1>Bienvenido al noticiero "El Hamiti News"</h1>
        <h2>Por favor seleccione su idioma</h2>
        <section>
            <ul class="contenedorIdiomas listaHorizontal">
              <li>
                    <form action="" method="get">
                    <input type="hidden" name="lang" value="es">
                    <button data-lang="es" class="opcionIdioma" type="submit">
                        <h1 >Español</h1>
                        <img width="100" height="100" src="https://img.icons8.com/plasticine/100/spain.png" alt="spain"/>
                    </button>
                </form>
              </li>
              <li>
                <form action="" method="get">
                    <input type="hidden" name="lang" value="en">
                    <button data-lang="en" class="opcionIdioma" type="submit">
                        <h1>English</h1>
                        <img width="100" height="100" src="https://img.icons8.com/plasticine/100/great-britain.png" alt="great-britain"/>
                    </button>
                </form>
              </li>

            </ul>
        </section>
    </main>

    <div class="hidden" id="contenido">
        <?php
        include($contenido);
        ?>
    </div>

      
    <script src="./scripts/jquery-3.7.1.min.js"></script>
    <script src="./scripts/scripts.js"></script>
  
</body>
</html>

