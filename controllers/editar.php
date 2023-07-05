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
    $imagen_vieja = $row['imagen_url'];
    $contenido = $row['contenido'];
} else {
    echo "No se encontró ninguna noticia con el ID " . $id;
    exit();
}

// Si se ha enviado el formulario de edición
if (isset($_POST['editar_noticia'])) {
    // Obtener los nuevos datos de la noticia del formulario
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $imagen = $_POST['imagen'];

    if(empty($titulo) or empty($contenido) or empty($imagen)){
        echo '<h3>Debe rellenar todos los campos</h3>';
    } else {
            // Actualizar los datos de la noticia en la base de datos
            $sql = "UPDATE noticias SET titulo = '$titulo', contenido = '$contenido', imagen_url = '$imagen'  WHERE id = $id";
            $result = $conn->query($sql);

            if ($result === TRUE) {
                header("Location: ./admin.php?id=" . $id);
                exit();
            } else {
                echo "Error al actualizar la noticia: " . $conn->error;
            }
  
            // Actualizar los datos de la noticia en la base de datos
            $sql = "UPDATE noticias SET titulo = '$titulo', contenido = '$contenido', imagen = '$imagen_vieja' WHERE id = $id";
            $result = $conn->query($sql);

            if ($result === TRUE) {
                header("Location: ./admin.php?id=" . $id);
                exit();
            } else {
                echo "Error al actualizar la noticia: " . $conn->error;
            }
    }

}

// Cerrar la conexión a la base de datos
$conn->close();
?>