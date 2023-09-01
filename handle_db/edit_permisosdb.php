<?php
// var_dump($_POST);

require_once("../handle_db/connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $id_ud = $_POST["id_ud"];
    $email = $_POST["Email"];
    $rol_id = $_POST["rol"];

    // Actualizar los datos en la base de datos
    $updateQuery = "UPDATE usuarios_datos SET Correo = :correo, rol_id = :rol WHERE id_ud = :id";
    $stmt = $pdo->prepare($updateQuery);
    $stmt->bindParam(":correo", $email);
    $stmt->bindParam(":rol", $rol_id);
    $stmt->bindParam(":id", $id_ud);

    if ($stmt->execute()) {
        // Redirigir a la página de permisos después de la edición
        header("Location: ../views_Admin/permiso_crud.php");
        exit();
    } else {
        echo "Error al actualizar los datos.";
    }
}
?>

