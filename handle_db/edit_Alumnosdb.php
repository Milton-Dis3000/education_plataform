<?php
require_once("../handle_db/connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $id_ud = $_POST["id_ud"];
    $dni = $_POST["DNI"];
    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $email = $_POST["Email"];
    $direccion = $_POST["Direccion"];
    $fecha_nacimiento = $_POST["Fecha_Nacimiento"];


    // Actualizar los datos en la base de datos
    $updateQuery = "UPDATE usuarios_datos SET DNI =:DNI, Nombre = :Nombre, Apellido =:Apellido, Correo = :correo, Direccion =:Direccion, Fecha_Nacimiento =:Fecha_Nacimiento WHERE id_ud = :id";
    $stmt = $pdo->prepare($updateQuery);
    $stmt->bindParam(":DNI", $dni);
    $stmt->bindParam(":Nombre", $nombre);
    $stmt->bindParam(":Apellido", $apellido);
    $stmt->bindParam(":correo", $email);
    $stmt->bindParam(":Direccion", $direccion);
    $stmt->bindParam(":Fecha_Nacimiento", $fecha_nacimiento);
    $stmt->bindParam(":id", $id_ud);

    if ($stmt->execute()) {
        // Redirigir a la página de permisos después de la edición
        header("Location: ../views_Admin/alumno_crud.php");
        exit();
    } else {
        echo "Error al actualizar los datos.";
    }
}
?>
