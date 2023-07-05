<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "landing_database";
$conn = new mysqli($servername, $username, $password, $dbname);

// Obtener el ID de la noticia a editar
$id = $_GET['id'];

// Obtener los datos actuales de la noticia
$sql = "SELECT * FROM noticias WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $titulo = $row['titulo'];
    $contenido = $row['contenido'];

    echo '<div class="noticia">';
    echo '<td><img src="' . $row['imagen_url'] . '" alt="Imagen de la noticia"></td>';
    echo '<h1>' . $row['titulo'] .'</h1>';
    echo '<p>' . $row['contenido'] . '</p>';
    echo '</div>';
}
// Cerrar la conexión a la base de datos
$conn->close();
?>