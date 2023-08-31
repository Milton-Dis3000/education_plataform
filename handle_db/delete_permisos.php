<?php
// var_dump($_GET);

if(isset($_GET["id"])){
    $id = $_GET["id"];

    require_once("connection.php");
    $query = "delete from usuarios_datos where id_ud=$id";
    $pdo->query($query);
    header("Location: ../views_Admin/permiso_crud.php");
}