<?php 

$host = "localhost";
$user = "root";
$clave = "";
$db = "restaurante";
$conexion = mysqli_connect($host, $user, $clave, $db);
if (mysqli_connect_error()) {
    echo "conexion fallida con la base de datos";
    exit();
}mysqli_select_db($conexion, $db) or die("base de datos no encontrada");
mysqli_set_charset($conexion, "uft8");



?>