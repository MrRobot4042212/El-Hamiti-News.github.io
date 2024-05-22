<?php
require('./conn.php');
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ./.loginForm.php");
    exit();
}

$sql = "SELECT MAX(ID_noticia) AS max_id FROM Noticias";
$result = $con->query($sql);
$max_id = 0;

if ($result && $row = $result->fetch_assoc()) {
    $max_id = $row['max_id'];
}

$next_id = $max_id + 1;

$titulo_noticia_es = $_POST['titulo_noticia_es'];
$titulo_noticia_en = $_POST['titulo_noticia_en'];
$fecha_noticia = $_POST['fecha_noticia'];
$contenido_noticia_es = $_POST['contenido_noticia_es'];
$contenido_noticia_en = $_POST['contenido_noticia_en'];
$id_seccion = $_POST['id_seccion'];
$urlImg = $_POST['urlImg'];

$stmt = $con->prepare("INSERT INTO Noticias (ID_noticia, Titulo_noticia, Titulo_noticia_en, Fecha_noticia, Contenido_noticia, Contenido_noticia_en, ID_seccion, urlImg) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
    die("Error en la preparación de la declaración: " . $con->error);
}
$stmt->bind_param("isssssis", $next_id, $titulo_noticia_es, $titulo_noticia_en, $fecha_noticia, $contenido_noticia_es, $contenido_noticia_en, $id_seccion, $urlImg);

if ($stmt->execute()) {
    echo "Nueva noticia creada con éxito. ID: " . $next_id;
    header("Location: ./.InsertBD.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$con->close();
?>
