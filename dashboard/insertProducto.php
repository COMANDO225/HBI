<?php
include('../database/conexion.php');
include('../dashboard/functionProducto.php');


if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Agregar")
	{
		$image = '';
		if($_FILES["producto_image"]["name"] != '')
		{
			$image = upload_image();
		}
		$statement = $conexion->prepare("
		INSERT INTO productos (nombre, subnombre,iconpais,procedencia,fabricante,aplicacion,valores,descripcion,image) 
		VALUES (
                :nombre, 
                :subnombre,
                :iconpais,
                :procedencia,
                :fabricante,
                :aplicacion,
                :valores,
                :descripcion, 

                :image)
		");
		$result = $statement->execute(
			array(
				':nombre'	    =>	$_POST["nombre"],
				':subnombre'	=>	$_POST["subnombre"],
                ':iconpais'	    =>	$_POST["iconpais"],
                ':procedencia'	=>	$_POST["procedencia"],
                ':fabricante'	=>	$_POST["fabricante"],
                ':aplicacion'	=>	$_POST["aplicacion"],
                ':valores'	    =>	$_POST["valores"],
                ':descripcion'	=>	$_POST["descripcion"],
				':image'		=>	$image
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Editar")
	{
		$image = '';
		if($_FILES["producto_image"]["name"] != '')
		{
			$image = upload_image();
		}
		else
		{
			$image = $_POST["hidden_producto_image"];
		}
		$statement = $conexion->prepare(
			"UPDATE productos 
			SET 
                nombre = :nombre,
                subnombre = :subnombre,
                iconpais = :iconpais,
                procedencia = :procedencia,
                fabricante = :fabricante,
                aplicacion = :aplicacion,
                valores = :valores,
                descripcion = :descripcion,

                image = :image  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':nombre'	    =>	$_POST["nombre"],
				':subnombre'	=>	$_POST["subnombre"],
                ':iconpais'	    =>	$_POST["iconpais"],
                ':procedencia'	=>	$_POST["procedencia"],
                ':fabricante'	=>	$_POST["fabricante"],
                ':aplicacion'	=>	$_POST["aplicacion"],
                ':valores'	    =>	$_POST["valores"],
                ':descripcion'	=>	$_POST["descripcion"],

				':image'		=>	$image,
				':id'			=>	$_POST["producto_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Producto Actualizado';
			// echo "<script> 
			// Swal.fire(
			// 	'The Internet?',
			// 	'That thing is still around?',
			// 	'question'
			// )
			// </script>";
		}
	}
}

?>