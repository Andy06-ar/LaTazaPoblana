<?php
// Incluimos el archivo que establece la conexión con la base de datos
include("conexion.php");

// Verificamos que la solicitud sea de tipo POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Escapamos los datos del formulario para evitar inyecciones SQL
    $username = mysqli_real_escape_string($conex, $_POST['username']);
    $password = mysqli_real_escape_string($conex, $_POST['password']);

    // Preparamos la consulta para buscar un usuario con las credenciales proporcionadas
    $consulta = "SELECT * FROM usuarios WHERE nombre = '$username' AND contraseña = '$password'";
    $resultado = mysqli_query($conex, $consulta);

    // Si se encontró exactamente un usuario, iniciamos sesión y redirigimos a homepage
    if (mysqli_num_rows($resultado) == 1) {
        session_start();
        $_SESSION['username'] = $username;
        echo "<script>alert('Inicio de sesión exitoso'); window.location.href = 'homepage.php';</script>";
    } else {
        // Si no se encuentra el usuario, mostramos un mensaje de error y redirigimos a login
        echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href = 'login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Se enlaza el archivo de estilos -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Importamos las fuentes desde Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&family=Caveat:wght@400..700&family=Lobster&family=Righteous&family=Rubik+Dirt&display=swap');
    </style>
</head>
<body>
    <!-- Formulario de inicio de sesión -->
    <form method="post" action="login.php">
        <h2>Iniciar Sesión</h2>
        <div class="input-container">
            <input type="text" name="username" placeholder="Usuario" required>
        </div>
        <div class="input-container">
            <input type="password" name="password" placeholder="Contraseña" required>
        </div>
        <button type="submit" class="boton">Ingresar</button>
    </form>
</body>
</html>
```