<?php
// Iniciar sesión
session_start();

// Establecer la vida útil de la cookie de sesión en 0
session_set_cookie_params(0);

// Regenerar la ID de la sesión
session_regenerate_id(true);

// Destruir la sesión actual
session_destroy();

// Redirigir al usuario a otra página
header('Location: ../index.php');
exit();
?>