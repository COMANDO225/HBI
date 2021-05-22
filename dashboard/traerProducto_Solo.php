<?php
include('../database/conexion.php');
include('../dashboard/functionProducto.php');

if(isset($_POST["producto_id"]))
{
	$output = array();
	$statement = $conexion->prepare(
		"SELECT * FROM productos 
		WHERE id = '".$_POST["producto_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["nombre"] = $row["nombre"];
		$output["subnombre"] = $row["subnombre"];
        $output["iconpais"] = $row["iconpais"];
        $output["procedencia"] = $row["procedencia"];
        $output["fabricante"] = $row["fabricante"];
        $output["aplicacion"] = $row["aplicacion"];
        $output["valores"] = $row["valores"];
        $output["descripcion"] = $row["descripcion"];
		if($row["image"] != '')
		{
			$output['producto_image'] = '<img src="../dashboard/uploads/'.$row["image"].'" class="img-thumbnail p-0 border-0 rounded-0" width="60" height="45" /><input type="hidden" name="hidden_producto_image" value="'.$row["image"].'" />';
		}
		else
		{
			$output['producto_image'] = '<input type="hidden" name="hidden_producto_image" value="" />';
		}
	}
	echo json_encode($output);
}
?>