<?php
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "landing_database";
        // Conectar a la base de datos
        $conexion = mysqli_connect($servername, $username, $password, $dbname);

        // Verificar la conexión
        if (!$conexion) {
          die("Error al conectar a la base de datos: " . mysqli_connect_error()); 
        }

        // Ejecutar la consulta para obtener todas las noticias
        $resultado = mysqli_query($conexion, "SELECT * FROM noticias");

          // Iterar sobre los resultados y mostrarlos en la tabla HTML
        while ($fila = mysqli_fetch_assoc($resultado)) {
          echo '<tr>';
          echo '<div class="noticia">';
          echo '<td><img src="' . $fila['imagen_url'] . '" alt="Imagen de la noticia"></td>';
          echo '<h3>' . $fila['titulo'] .'</h3>';
          echo '<p>' . $fila['contenido'] . '</p>';
          echo '<a href="./views/noticias.php?id=' . $fila['id'] . '">Ver noticia</a>'; 
          echo '</div>';
        }

        // Liberar los resultados y cerrar la conexión
        mysqli_free_result($resultado);
        mysqli_close($conexion);
?>