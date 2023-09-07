<?php
session_start();
require_once("../handle_db/connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $email = $_POST["Email"];
    $contra = $_POST["Contra"];
    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $direccion = $_POST["Direccion"];
    $fecha_nacimiento = $_POST["Fecha_Nacimiento"];

    // Obtener el usuario_id del usuario actual de la variable de sesión
    $usuario_id = $_SESSION['usuario_id'];

    // Actualizar los datos en la base de datos solo para el usuario específico
    $updateQuery = "UPDATE usuarios_datos SET Correo = :Email, Contra = :Contra, Nombre = :Nombre, Apellido = :Apellido, Direccion = :Direccion, Fecha_Nacimiento = :Fecha_Nacimiento WHERE id_ud = :UsuarioID";
    $stmt = $pdo->prepare($updateQuery);
    $stmt->bindParam(":Email", $email);
    $stmt->bindParam(":Contra", $contra); // Asegúrate de que estás usando la contraseña correcta, si no debes cambiar esto
    $stmt->bindParam(":Nombre", $nombre);
    $stmt->bindParam(":Apellido", $apellido);
    $stmt->bindParam(":Direccion", $direccion);
    $stmt->bindParam(":Fecha_Nacimiento", $fecha_nacimiento);
    $stmt->bindParam(":UsuarioID", $usuario_id);

    if ($stmt->execute()) {
        // Redirigir a la página de maestro después de la edición
        header("Location: ../views_Alumno/alumno.php");
        exit();
    } else {
        echo "Error al actualizar los datos.";
    }
}
