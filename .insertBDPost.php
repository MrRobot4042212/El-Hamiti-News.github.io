<?php

require('./conn.php');
session_start();


$titulo_noticia_es = $_POST['titulo_noticia_es'];
$titulo_noticia_en = $_POST['titulo_noticia_en'];
$fecha_noticia = $_POST['fecha_noticia'];
$contenido_noticia_es = $_POST['contenido_noticia_es'];
$contenido_noticia_en = $_POST['contenido_noticia_en'];
$id_seccion = $_POST['id_seccion'];
$urlImg = $_POST['urlImg'];

$stmt = $conn->prepare("INSERT INTO Noticias (Titulo_noticia, Titulo_noticia_en, Fecha_noticia, Contenido_noticia, Contenido_noticia_en, ID_seccion, urlImg) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssis", $titulo_noticia_es, $titulo_noticia_en, $fecha_noticia, $contenido_noticia_es, $contenido_noticia_en, $id_seccion, $urlImg);

if ($stmt->execute()) {
    echo "Nueva noticia creada con éxito";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>