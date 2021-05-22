<?php

function upload_image()
{
	if(isset($_FILES["producto_image"]))
	{
		$extension = explode('.', $_FILES['producto_image']['name']);
		$new_name = rand() . '.' . $extension[1];
		$destination = '../dashboard/uploads/' . $new_name;
		move_uploaded_file($_FILES['producto_image']['tmp_name'], $destination);
		return $new_name;
	}
}

function get_image_name($producto_id)
{
	include('../database/conexion.php');
	$statement = $conexion->prepare("SELECT image FROM productos WHERE id = '$producto_id'");
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row["image"];
	}
}

function get_total_all_records()
{
	include('../database/conexion.php');
	$statement = $conexion->prepare("SELECT * FROM productos");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

?>