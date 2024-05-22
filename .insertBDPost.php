<?php
// Incluir el archivo de conexión
require('./conn.php');
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Obtener datos del formulario
$titulo_noticia_es = $_POST['titulo_noticia_es'];
$titulo_noticia_en = $_POST['titulo_noticia_en'];
$fecha_noticia = $_POST['fecha_noticia'];
$contenido_noticia_es = $_POST['contenido_noticia_es'];
$contenido_noticia_en = $_POST['contenido_noticia_en'];
$id_seccion = $_POST['id_seccion'];
$urlImg = $_POST['urlImg'];

// Preparar la consulta SQL para insertar datos
$stmt = $con->prepare("INSERT INTO Noticias (Titulo_noticia, Titulo_noticia_en, Fecha_noticia, Contenido_noticia, Contenido_noticia_en, ID_seccion, urlImg) VALUES (?, ?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
    die("Error en la preparación de la declaración: " . $con->error);
}
$stmt->bind_param("sssssis", $titulo_noticia_es, $titulo_noticia_en, $fecha_noticia, $contenido_noticia_es, $contenido_noticia_en, $id_seccion, $urlImg);

if ($stmt->execute()) {
    // Obtener el ID de la última inserción
    $last_id = $con->insert_id;
    echo "Nueva noticia creada con éxito. ID: " . $last_id;
    header("Location: ./.InsertBD.php"); // Redirigir a la página de inserción
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$con->close();
?>
