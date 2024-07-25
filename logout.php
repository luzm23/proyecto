<?php
session_start();
$_SESSION = array(); // Elimina todas las variables de sesión
session_destroy(); // Destruye la sesión
header('Location: index.html'); // Redirige al formulario de inicio de sesión
exit;
?>

