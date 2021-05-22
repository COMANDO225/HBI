<?php 
    // class Conexion{
    //     public static function Conectar(){
    //         define('servidor','localhost');
    //         define('nombrebd','newhbi');
    //         define('usuario','root');
    //         define('password','');

    //         $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    //         try{
    //             $conexion = new PDO(
    //                 "mysql:host=".servidor.
    //                 ";dbname=".nombrebd,
    //                 usuario,
    //                 password,
    //                 $opciones);
    //                 return $conexion;
    //         }catch(Exception $e){
    //             die("El error de conexion es: ".$e -> getMessage());
    //         }
    //     }
    // }
    $username = 'root';
    $password = '';
    $conexion = new PDO( 'mysql:host=localhost;dbname=newhbi', $username, $password );
?>
