<?php
session_start();
session_destroy(); // Cierra la sesión eliminando todas las variables
header("Location: login.php"); // Redirige al formulario de inicio de sesión
exit();
?>
