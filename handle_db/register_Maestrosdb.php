<?php
require_once("../handle_db/connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $direccion = $_POST["direccion"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $materia_id = $_POST["materias"];
    $rol_id = 2; // Definir el ID del rol de maestro

    // Insertar los datos en la base de datos
    try {
        $insertQuery = "INSERT INTO usuarios_datos (Nombre, Apellido, Correo, Direccion, Fecha_Nacimiento, materia_id, rol_id) VALUES (:nombre, :apellido, :email, :direccion, :fecha_nacimiento, :materia_id, :rol_id)";
        $stmt = $pdo->prepare($insertQuery);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":apellido", $apellido);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":direccion", $direccion);
        $stmt->bindParam(":fecha_nacimiento", $fecha_nacimiento);
        $stmt->bindParam(":materia_id", $materia_id);
        $stmt->bindParam(":rol_id", $rol_id);

        if ($stmt->execute()) {
            // Redirigir a la página de maestros después del registro
            header("Location: ../views_Admin/maestro_crud.php");
            exit();
        } else {
            // Manejo de errores en caso de que la consulta falle
            echo "Error al registrar el maestro.";
        }
    } catch (PDOException $e) {
        // Manejo de excepciones de la base de datos
        echo "Error de base de datos: " . $e->getMessage();
    }
}
