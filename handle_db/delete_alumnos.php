<?php
// var_dump($_GET);

if(isset($_GET["id"])){
    $id = $_GET["id"];

    require_once("connection.php");
    $query = "DELETE FROM usuarios_datos WHERE id_ud = $id";
    $pdo->query($query);

    if ($rol_id == 3) {
        header("Location: ../views_Admin/alumno_crud.php");
    } else {
        header("Location: ../views_Admin/permiso_crud.php");
    }
}

$rol_id = 3;
header("Location: ../views_Admin/alumno_crud.php");
?>