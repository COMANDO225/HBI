<?php

function upload_image()
{
	if(isset($_FILES["noticia_image"]))
	{
		$extension = explode('.', $_FILES['noticia_image']['name']);
		$new_name = rand() . '.' . $extension[1];
		$destination = '../dashboard/uploads/' . $new_name;
		move_uploaded_file($_FILES['noticia_image']['tmp_name'], $destination);
		return $new_name;
	}
}

function get_image_name($noticia_id)
{
	include('../database/conexion.php');
	$statement = $conexion->prepare("SELECT imagen FROM noticias WHERE id = '$noticia_id'");
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row["imagen"];
	}
}

function get_total_all_records()
{
	include('../database/conexion.php');
	$statement = $conexion->prepare("SELECT * FROM noticias");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}
?>