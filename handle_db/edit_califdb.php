<?php
require_once("../handle_db/connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $id_mm = $_POST["id_mm"];
    $calificacion = $_POST["Calificacion"];
    $nombre = $_POST["Mensaje"];
  

    // Actualizar los datos en la base de datos
    $updateQuery = "UPDATE usuarios_datos SET calificacion = :Calificacion, mensaje = :Mensaje WHERE id_mm = :id";
    $stmt = $pdo->prepare($updateQuery);
 
    $stmt->bindParam(":Calificacion", $fecha_nacimiento);
    $stmt->bindParam(":Mensaje", $materia_id);
    $stmt->bindParam(":id", $id_mm);

    if ($stmt->execute()) {
        // Redirigir a la página de permisos después de la edición
        header("Location: ../views_Maestro/edit_read_Alumnos.php");
        exit();
    } else {
        echo "Error al actualizar los datos.";
    }
}