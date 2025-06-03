<?php
// Incluiye el archivo de conexión a la base de datos
include("conexion.php");

// Verifica si se ha enviado el formulario (botón "send")
if (isset($_POST['send'])) {
    // Comprueba que ninguno de los campos esté vacío
    if (
        !empty($_POST['name']) &&
        !empty($_POST['password']) &&
        !empty($_POST['email']) &&
        !empty($_POST['phone']) &&
        !empty($_POST['fecha'])
    ) {
        // Guarda los valores enviados en variables
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $fecha = $_POST['fecha'];

        // Prepara la consulta SQL para insertar el nuevo usuario en la base de datos
        $consulta = "INSERT INTO usuarios (nombre, contraseña, correo, telefono, fecha_nacimiento) 
                     VALUES ('$name', '$password', '$email', '$phone', '$fecha')";

        // Ejecuta la consulta y muestra una alerta según el resultado
        if (mysqli_query($conex, $consulta)) {
            echo "<script>alert('Registro exitoso');</script>";
        } else {
            echo "<script>alert('Error en el registro');</script>";
        }
    } else {
        // Muestra una alerta si falta algún campo por llenar
        echo "<script>alert('Por favor, completa todos los campos');</script>";
    }
}

// Cierra la conexión con la base de datos
mysqli_close($conex);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Importa las fuentes de Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&family=Caveat:wght@400..700&family=Lobster&family=Righteous&family=Rubik+Dirt&display=swap');
    </style>
</head>
<body>
    <!-- Formulario de registro de usuario -->
    <form method="post" action="send.php">
        <h2>Registro de Usuario</h2>
        <div class="input-container">
            <input type="text" name="name" placeholder="Nombre" required>
        </div>
        <div class="input-container">
            <input type="password" name="password" placeholder="Contraseña" required>
        </div>
        <div class="input-container">
            <input type="email" name="email" placeholder="Correo electrónico" required>
        </div>
        <div class="input-container">
            <input type="tel" name="phone" placeholder="Teléfono" required>
        </div>
        <div class="input-container">
            <input type="date" name="fecha" required>
        </div>
        <button type="submit" name="send" class="boton">Registrar</button>
        <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
    </form>
</body>
</html>
```