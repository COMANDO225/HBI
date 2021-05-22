<?php 
session_start();

include_once('../database/conexion.php');
// $objeto = new Conexion();
// $conexion = $objeto -> Conectar();

// Recepción de datos enviados mediante POST desde AJAX Jquery

$usuario  = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

// Encriptacion por md5 de la la contraseña del usuario
$pass = md5($password);

$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$pass' ";

$resultado = $conexion->prepare($consulta);
$resultado -> execute();

if($resultado->rowCount() >= 1){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['s_usuario'] = $usuario;

}else{
    $_SESSION['s_usuario'] = null;
    $data = null;
}

print json_encode($data);
$conexion = null;