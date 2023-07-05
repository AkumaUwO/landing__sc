<?php
session_start();
// Verificar si la sesión está activa
if (isset($_SESSION['usuario'])) {
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Panel de Administrador</title>
  <link rel="stylesheet" href="../public/stylesheets/admin.css">
</head>
<body>
  <header>
    <nav>
      <div class="logo">
        <img src="../public/images/logo.png" alt="Logo UNERG">

        <span>Panel de Administrador</span>
      </div>
      <ul class="menu">
        <li><a href="../index.php">Volver</a></li>
        <li><a href="../controllers/logout.php">Cerrar Sesion</a></li>
      </ul>
      <script src="../public/scripts/script.js"></script>
    </nav>
  </header>

  <main>
    <h2>Subir Noticia</h2>
    <?php
        if (isset($_GET['error'])){
          if($_GET['error'] == '1'){
            echo '<h3>Debe rellenar todos los campos</h3>';
          }
        }
    ?>
    <form action="../controllers/crear.php" method="POST" enctype="multipart/form-data">
      <div>
      <label for="imagen">URL de la imagen:</label>
        <div>
          <input type="text" id="imagen" name="imagen">
        </div>
      </div>
      <div>
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo">
      </div>
      <div>
        <label for="contenido">Contenido:</label>
        <div>
          <textarea id="contenido" name="contenido"></textarea>
          <button type="submit" name="crear_noticia" value="Crear noticia">Guardar</button>
        </div>
      </div>
    </form>

    <hr>

    <h2>Noticias</h2>
    <table id="tabla-noticias">
      <thead>
        <tr>
          <th>Imagen</th>
          <th>Título</th>
          <th>Contenido</th>
          <th>Acciones</th>
        </tr>
        

      </thead>
      <tbody>

      <?php
        require_once('../controllers/mostrar.php');
        ?>
      </tbody>
    </table>
    
  </main>


  <script src="../public/scripts/admin.js"></script>
</body>
</html>

<?php } else {
header('Location: ../index.php');
exit();
}?>