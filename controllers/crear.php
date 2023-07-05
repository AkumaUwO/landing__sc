<?php
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "landing_database";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($_POST) {
        //Obtener el titulo y el contenido
        $imagen = $_POST['imagen'];
        $titulo = $_POST['titulo'];
        $contenido = $_POST['contenido'];
        if(empty($titulo) or empty($contenido) or empty($imagen)){
            header('Location: ../views/admin.php?error=1');
        }else{
                // Insertar la imagen en la base de datos
                $sql = "INSERT INTO noticias (imagen_url, titulo, contenido) VALUES ('$imagen', '$titulo', '$contenido')";
                $conn->query($sql);

                header('Location: ../views/admin.php');
                exit();
        }
    }

?>