<!-- index.html -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicio Comunitario | UNERG</title>
  <link rel="stylesheet" href="./public/stylesheets/styles.css">
</head>

<body>


<?php
session_start();
// Verificar si la sesión está activa
if ($_SESSION) {
  include_once('./partials/nav_admin.php');
} else {
  // La sesión no está activa
  include_once('./partials/nav.php');
}
?>
  
  <header id="inicio">
    <h1>Servicio Comunitario UNERG</h1>
    <p>Bienvenido a nuestro sitio web</p>
  </header>
  
  <section id="acerca-de">
    <h2>Acerca de</h2>
    <p>El Servicio Comunitario de la Universidad Nacional Experimental "Romulo Gallegos" es un programa que busca fomentar la responsabilidad social de los estudiantes a través de proyectos que aborden problemáticas de la comunidad. Nuestra misión es...</p>
    
    <h3>Misión</h3>
    <p>Contribuir a la formación integral de los estudiantes de la UNERG, a través del desarrollo de proyectos de servicio comunitario que promuevan la responsabilidad social y la solidaridad con la comunidad.</p>
    
    <h3>Visión</h3>
    <p>Ser un programa de referencia en el ámbito del servicio comunitario universitario, reconocido por su compromiso con la sociedad y su capacidad para formar ciudadanos responsables y comprometidos.</p>
    
    <h3>Valores</h3>
    <ul>
      <li>Responsabilidad</li>
      <li>Solidaridad</li>
      <li>Compromiso</li>
      <li>Respeto</li>
      <li>Empatía</li>
    </ul>
    
    <h3>Objetivos</h3>
    <ul>
      <li>Promover la participación activa de los estudiantes en proyectos de servicio comunitario.</li>
      <li>Fomentar la formación ciudadana y el compromiso social de los estudiantes.</li>
      <li>Contribuir al desarrollo social y comunitario a través de proyectos de impacto.</li>
    </ul>
  </section>
  
<section id="noticias">
  <h2>Noticias</h2>
  <div class="noticias-container">
    <?php
      require_once('./controllers/mostrar_noticia.php');
    ?>
  </div>
</section>
  
  <section id="redes-sociales">
    <h2>Redes Sociales</h2>
    <div class="social-media">
      <a href="https://twitter.com/unerg" target="_blank"><img src="public/images/twitter.png" alt="Twitter"></a>
      <a href="https://www.facebook.com/unerg" target="_blank"><img src="public/images/facebook.png" alt="Facebook"></a>
      <a href="https://www.instagram.com/unerg" target="_blank"><img src="public/images/instagram.png" alt="Instagram"></a>
    </div>
  </section>
  
  <footer>
    <p>Servicio Comunitario UNERG &copy; 2023</p>
  </footer>

  <script src="./public/scripts/script.js"></script>
</body>
</html>