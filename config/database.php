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

        return $conexion
?>