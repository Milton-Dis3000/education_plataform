<?php
require_once("../handle_db/connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $id_mm = $_POST["id_mm"];
    $calificacion = $_POST["Calificacion"];
    $nombre = $_POST["Mensaje"];

    // Actualizar los datos en la base de datos
    $updateQuery = "UPDATE maestro_materia SET calificacion = :Calificacion, mensaje = :Mensaje WHERE id_mm = :id";
    $stmt = $pdo->prepare($updateQuery);

    $stmt->bindParam(":Calificacion", $calificacion);
    $stmt->bindParam(":Mensaje", $nombre);
    $stmt->bindParam(":id", $id_mm);

    if ($stmt->execute()) {
        header("Location: ../views_Maestro/read_Alumnos.php");
        exit();
    } else {
        echo "Error al actualizar los datos: " . $stmt->errorInfo()[2];
    }
}
