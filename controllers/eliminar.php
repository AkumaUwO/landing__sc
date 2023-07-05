<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "landing_database";
$conn = new mysqli($servername, $username, $password, $dbname);

// Obtener el ID de la noticia a eliminar
$id = $_GET['id'];

// Eliminar la noticia de la base de datos
$sql = "DELETE FROM noticias WHERE id = $id";
$result = $conn->query($sql);

if ($result === TRUE) {
    echo "La noticia con ID " . $id . " ha sido eliminada exitosamente.";
} else {
    echo "Error al eliminar la noticia: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();

header('Location: ../views/admin.php');
exit();
?>