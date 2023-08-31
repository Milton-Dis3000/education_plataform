<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "university";
$dsn = "mysql:host=$hostname;dbname=$dbname";
// echo "Connected";

try{
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e){
    echo "Error:" . $e->getMessage();
}