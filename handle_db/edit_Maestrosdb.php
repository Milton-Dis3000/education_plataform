<?php
require_once("../handle_db/connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $id_ud = $_POST["id_ud"];
    $email = $_POST["Email"];
    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $direccion = $_POST["Direccion"];
    $fecha_nacimiento = $_POST["Fecha_Nacimiento"];
    $materia_id = $_POST["materias"];

    // Actualizar los datos en la base de datos
    $updateQuery = "UPDATE usuarios_datos SET Correo = :correo, Nombre = :Nombre, Apellido =:Apellido, Direccion =:Direccion, Fecha_Nacimiento =:Fecha_Nacimiento,  materia_id = :materias WHERE id_ud = :id";
    $stmt = $pdo->prepare($updateQuery);
    $stmt->bindParam(":correo", $email);
    $stmt->bindParam(":Nombre", $nombre);
    $stmt->bindParam(":Apellido", $apellido);
    $stmt->bindParam(":Direccion", $direccion);
    $stmt->bindParam(":Fecha_Nacimiento", $fecha_nacimiento);
    $stmt->bindParam(":materias", $materia_id);
    $stmt->bindParam(":id", $id_ud);

    if ($stmt->execute()) {
        // Redirigir a la página de permisos después de la edición
        header("Location: ../views_Admin/maestro_crud.php");
        exit();
    } else {
        echo "Error al actualizar los datos.";
    }
}
?>
