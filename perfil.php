<?php
session_start(); // Inicia la sesión
include("conexion.php"); // Incluye el archivo de conexión a la base de datos

// Verifica que el usuario haya iniciado sesión. Si no, muestra un aviso y redirige al login.
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Debes iniciar sesión para acceder a esta página'); window.location.href = 'login.php';</script>";
    exit();
}

$username = $_SESSION['username']; // Almacena el nombre de usuario de la sesión en una variable

// Consulta preparada para obtener los datos del usuario en la base de datos
$query = "SELECT nombre, correo, telefono, fecha_nacimiento FROM usuarios WHERE nombre = ?";
$stmt = mysqli_prepare($conex, $query); // Prepara la consulta
mysqli_stmt_bind_param($stmt, "s", $username); // Vincula el parámetro de tipo string ($username) a la consulta
mysqli_stmt_execute($stmt); // Ejecuta la consulta
mysqli_stmt_bind_result($stmt, $nombre, $correo, $telefono, $fecha_nacimiento); // Asigna los resultados a variables
mysqli_stmt_fetch($stmt); // Recupera los datos de la consulta
mysqli_stmt_close($stmt); // Cierra la sentencia preparada
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="css/perfil.css" />
    <style>
        /* Importa las fuentes desde Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&family=Caveat:wght@400..700&family=Lobster&family=Righteous&family=Rubik+Dirt&display=swap');
    </style>
</head>
<body>
    <!-- Encabezado del perfil, con imagen de fondo definida en el CSS -->
    <header class="header-profile">
        <div class="container">
            <!-- Muestra el nombre del usuario (escapado para seguridad) -->
            <h1>Perfil de <?php echo htmlspecialchars($nombre); ?></h1>
        </div>
    </header>

    <!-- Contenedor principal que muestra la información personal del usuario -->
    <main>
        <div class="container profile-container">
            <section class="profile-info">
                <h2>Información Personal</h2>
                <ul>
                    <li><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></li>
                    <li><strong>Correo:</strong> <?php echo htmlspecialchars($correo); ?></li>
                    <li><strong>Teléfono:</strong> <?php echo htmlspecialchars($telefono); ?></li>
                    <li><strong>Fecha de Nacimiento:</strong> <?php echo htmlspecialchars($fecha_nacimiento); ?></li>
                </ul>
            </section>
            <!-- Botón para volver a la página principal -->
            <a href="homepage.php" class="boton">Volver a Inicio</a>
        </div>
    </main>

    <!-- Footer con derechos reservados -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Mi Proyecto Escolar</p>
        </div>
    </footer>
</body>
</html>
