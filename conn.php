<?php
 $db_host="localhost";
 $db_usuario="root";
 $db_contra="";
 $db_nombre="newhbi";
 $conexion=new mysqli($db_host,$db_usuario,$db_contra);
 
 if($conexion){
 }
 else{
  echo("No se conectó a la base de datos");
 }
 mysqli_set_charset($conexion,"utf8");
?>