<?php

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if(!$id){
    header('Location: productos.php');
}
include_once './database/conexion.php';

$consulta = "SELECT * FROM productos where id = :id";
$statement = $conexion->prepare($consulta);
$statement->execute(array(':id' => $id));

$producto = $statement->fetch();

if(!$producto) {
    header('Location: productos.php');
}

require 'productoInfo_view.php';

?>