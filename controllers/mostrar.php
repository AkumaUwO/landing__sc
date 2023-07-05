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
            echo '<td><img src="' . $fila['imagen_url'] . '" alt="Imagen de la noticia"></td>';
            echo '<td>' . $fila['titulo'] . '</td>';
            echo '<td>' . $fila['contenido'] . '</td>';
            echo '<td class="actions">
                    <a href="./editar.php?id=' . $fila['id'] . '">Editar</a>
                    <a href="../controllers/eliminar.php?id=' . $fila['id'] . '">Eliminar</a>
                  </td>';
            echo '</tr>';
        }

        // Liberar los resultados y cerrar la conexión
        mysqli_free_result($resultado);
        mysqli_close($conexion);
    ?>