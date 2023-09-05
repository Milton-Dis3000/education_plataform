<?php
session_start(); // Iniciar la sesión


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["correo"]) && isset($_POST["pass"])) {
    $correo = $_POST["correo"];
    $pass = $_POST["pass"];



    // Realizar la consulta SQL para verificar las credenciales
    require_once($_SERVER["DOCUMENT_ROOT"] . "/handle_db/connection.php");

    $query = "SELECT * FROM usuarios_datos WHERE Correo = :correo AND Contra = :pass";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":correo", $correo);
    $stmt->bindParam(":pass", $pass);
    $stmt->execute();


    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Credenciales válidas, asignar roles y redirigir
        $_SESSION["usuario_id"] = $row["id_ud"];
        $_SESSION["rol_id"] = $row["rol_id"];

        // Redirigir según el rol
        switch ($_SESSION["rol_id"]) {
            case 1: // Administrador
                header("Location: ../views_Admin/admin.php");
                break;
            case 2: // Maestro
                header("Location: ../views_Admin/Maestros/maestro.php");
                break;
            case 3: // Alumno
                header("Location: ../views_Admin/Alumnos/alumno.php");
                break;
            default:
                // Manejar un rol no reconocido o mostrar un mensaje de error.
                break;
        }
        exit(); 
    } else {
        header("Location: ../index.php");
        exit();
    }
} else {
    header("Location: ../index.php");
    exit();
}
