<?php
// Incluir el archivo de conexión
require('./conn.php');
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Obtener el máximo ID actual de la tabla Noticias
$sql = "SELECT MAX(ID_noticia) AS max_id FROM Noticias";
$result = $con->query($sql);
$max_id = 0;

if ($result && $row = $result->fetch_assoc()) {
    $max_id = $row['max_id'];
}

// Calcular el próximo ID disponible
$next_id = $max_id + 1;

// Obtener datos del formulario
$titulo_noticia_es = $_POST['titulo_noticia_es'];
$titulo_noticia_en = $_POST['titulo_noticia_en'];
$fecha_noticia = $_POST['fecha_noticia'];
$contenido_noticia_es = $_POST['contenido_noticia_es'];
$contenido_noticia_en = $_POST['contenido_noticia_en'];
$id_seccion = $_POST['id_seccion'];
$urlImg = $_POST['urlImg'];

// Preparar la consulta SQL para insertar datos
$stmt = $con->prepare("INSERT INTO Noticias (ID_noticia, Titulo_noticia, Titulo_noticia_en, Fecha_noticia, Contenido_noticia, Contenido_noticia_en, ID_seccion, urlImg) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
    die("Error en la preparación de la declaración: " . $con->error);
}
$stmt->bind_param("isssssis", $next_id, $titulo_noticia_es, $titulo_noticia_en, $fecha_noticia, $contenido_noticia_es, $contenido_noticia_en, $id_seccion, $urlImg);

if ($stmt->execute()) {
    echo "Nueva noticia creada con éxito. ID: " . $next_id;
    header("Location: ./.InsertBD.php"); // Redirigir a la página de inserción
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$con->close();
?>
