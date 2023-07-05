<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="../public/stylesheets/login.css">
</head>
<body>
  <h1>Iniciar sesión</h1>
  <?php
    // Si el formulario ha sido enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Obtener los datos del formulario
      $usuario = $_POST['usuario'];
      $contrasena = $_POST['contrasena'];

      // Conectar a la base de datos
      $conexion = mysqli_connect('localhost', 'root', '', 'landing_database');

      // Verificar la conexión
      if (!$conexion) {
        die('Error al conectar a la base de datos: ' . mysqli_connect_error());
      }

      // Consultar la tabla "admin" para verificar las credenciales
      $consulta = "SELECT id FROM admin WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
      $resultado = mysqli_query($conexion, $consulta);

      // Verificar si se encontraron las credenciales
      if (mysqli_num_rows($resultado) === 1) {
        // Iniciar sesión y redirigir al usuario a otra página
        session_start();
        $_SESSION['usuario'] = $usuario;
        header('Location: ../index.php');
        exit();
      } else {
        // Mostrar un mensaje de error si las credenciales son incorrectas
        echo '<p>Usuario o contraseña incorrectos.</p>';
      }

      // Cerrar la conexión a la base de datos
      mysqli_close($conexion);
    }
  ?>
  <form method="POST">
    <div>
      <label for="usuario">Usuario:</label>
      <input type="text" id="usuario" name="usuario" required>
    </div>
    <div>
      <label for="contrasena">Contraseña:</label>
      <input type="password" id="contrasena" name="contrasena" required>
    </div>
    <button type="submit">Iniciar sesión</button>
  </form>
</body>
</html>