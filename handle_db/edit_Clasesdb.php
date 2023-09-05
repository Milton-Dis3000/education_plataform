<?php

require_once("../handle_db/connection.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $id_materia = $_POST["id_materia"];
    $nombre_materia = $_POST["nombre_materia"];
    $maestros = $_POST["maestros"];

    // Actualizar los datos en la base de datos
    $updateQuery = "UPDATE materias SET nombre_materia = :nombre_materia, nombre_maestro = :maestros WHERE id_materia = :id";
    $stmt = $pdo->prepare($updateQuery);
    $stmt->bindParam(":nombre_materia", $nombre_materia);
    $stmt->bindParam(":maestros", $maestros);
    $stmt->bindParam(":id", $id_materia);

    if ($stmt->execute()) {
        // Redirigir a la página de permisos después de la edición
        header("Location: ../views_Admin/clases_crud.php");
        exit();
    } else {
        // Manejo de errores
        $errorInfo = $stmt->errorInfo();
        echo "Error al actualizar los datos: " . $errorInfo[2];
    }
}
