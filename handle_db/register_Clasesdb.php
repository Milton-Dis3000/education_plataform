<?php
require_once("../handle_db/connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $nombre_materia = $_POST["nombre_materia"];
    $maestros = $_POST["maestros"];

    // Insertar los datos en la base de datos
    $insertQuery = "INSERT INTO materias (nombre_materia, nombre_maestro) VALUES (:nombre_materia, :maestros)";
    $stmt = $pdo->prepare($insertQuery);
    $stmt->bindParam(":nombre_materia", $nombre_materia);
    $stmt->bindParam(":maestros", $maestros);

    if ($stmt->execute()) {
        // Redirigir a la página de permisos después de agregar la materia
        header("Location: ../views_Admin/clases_crud.php");
        exit();
    } else {
        // Manejo de errores
        $errorInfo = $stmt->errorInfo();
        echo "Error al agregar la materia: " . $errorInfo[2];
    }
}
?>