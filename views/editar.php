

<?php
session_start();
// Verificar si la sesión está activa
if (isset($_SESSION['usuario'])) {
?>





<!DOCTYPE html>
<html>
<head>
    <title>Editar noticia</title>
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
            <li><a href="./admin.php">Volver</a></li>
            <li><a href="../controllers/logout.php">Cerrar Sesion</a></li>
        </ul>
        <script src="../public/scripts/script.js"></script>
        </nav>
    </header>
    <main>
    <h1>Editar noticia</h1>
    <?php
        // Incluir el archivo de la vista de edición de la noticia
        include '../controllers/editar.php';
    ?>
    <form method="post" enctype="multipart/form-data">
        <label>Url de la imagen:</label><br>
        <input type="text" id="imagen" name="imagen" value="<?php echo $imagen_vieja; ?>"><br><br>
        <label>Título:</label><br>
        <input type="text" name="titulo" value="<?php echo $titulo; ?>"><br><br>
        <label>Contenido:</label><br>
        <textarea name="contenido"><?php echo $contenido; ?></textarea><br><br>
        <button type="submit" name="editar_noticia" value="Editar noticia">Guardar</button>
    </form>

    </main>
</body>
</html>

<?php } else {
header('Location: ../index.php');
exit();
}?>