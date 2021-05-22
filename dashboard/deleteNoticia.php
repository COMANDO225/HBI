<?php
include('../database/conexion.php');
include('../dashboard/functionNoticia.php');

if(isset($_POST["noticia_id"]))
{
	$image = get_image_name($_POST["noticia_id"]);
	if($image != '')
	{
		unlink("../dashboard/uploads/" . $image);
	}
	$statement = $conexion->prepare(
		"DELETE FROM noticias WHERE id = :id"
	);
	$result = $statement->execute(
		array(
			':id'	=>	$_POST["noticia_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Noticia Eliminada';
	}
}


