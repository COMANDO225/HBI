<?php
include('../database/conexion.php');
include('../dashboard/functionProducto.php');

if(isset($_POST["producto_id"]))
{
	$image = get_image_name($_POST["producto_id"]);
	if($image != '')
	{
		unlink("../dashboard/uploads/" . $image);
	}
	$statement = $conexion->prepare(
		"DELETE FROM productos WHERE id = :id"
	);
	$result = $statement->execute(
		array(
			':id'	=>	$_POST["producto_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Producto Eliminado';
	}
}


