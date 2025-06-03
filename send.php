<?php
include("conexion.php");

if (isset($_POST['send'])) {
    // Verificar que los campos no estén vacíos
    if (
        !empty($_POST['name']) &&
        !empty($_POST['password']) &&
        !empty($_POST['email']) &&
        !empty($_POST['phone']) &&
        !empty($_POST['fecha'])
    ) {
        // Asignar los valores del formulario
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $fecha = $_POST['fecha'];

        // Crear consulta SQL
        $consulta = "INSERT INTO usuarios (nombre, contraseña, correo, telefono, fecha_nacimiento) 
                     VALUES ('$name', '$password', '$email', '$phone', '$fecha')";

        // Ejecutar consulta y verificar el resultado
        if (mysqli_query($conex, $consulta)) {
            echo "<script>alert('Registro exitoso');</script>";
        } else {
            echo "<script>alert('Error en el registro');</script>";
        }
    } else {
        echo "<script>alert('Por favor, completa todos los campos');</script>";
    }
}

// Cerrar la conexión
mysqli_close($conex);
?>
