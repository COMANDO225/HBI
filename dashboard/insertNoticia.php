<?php
include('../database/conexion.php');
include('../dashboard/functionNoticia.php');


if(isset($_POST["operation_noticia"]))
{
	if($_POST["operation_noticia"] == "AgregarNoticia")
	{
		$image = '';
		if($_FILES["noticia_image"]["name"] != '')
		{
			$image = upload_image();
		}
		$statement = $conexion->prepare("
		INSERT INTO noticias (titulo, fecha,resumen,descripcionNoticia,imagen) 
		VALUES (
                :titulo, 
                :fecha,
                :resumen,
                :descripcionNoticia,
                :imagen)
		");
		$result = $statement->execute(
			array(
				':titulo'	    		=>	$_POST["titulo"],
				':fecha'	    		=>	$_POST["fecha"],
                ':resumen'	    		=>	$_POST["resumen"],
                ':descripcionNoticia'	=>	$_POST["descripcionNoticia"],
				':imagen'				=>	$image
			)
		);
		if(!empty($result))
		{
			echo 'Noticia Insertada';
		}
	}
	if($_POST["operation_noticia"] == "EditarNoticia")
	{
		$image = '';
		if($_FILES["noticia_image"]["name"] != '')
		{
			$image = upload_image();
		}
		else
		{
			$image = $_POST["hidden_noticia_image"];
		}
		$statement = $conexion->prepare(
			"UPDATE noticias 
			SET 
                titulo             = :titulo,
                fecha              = :fecha,
                resumen            = :resumen,
                descripcionNoticia = :descripcionNoticia,
                imagen             = :imagen
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':titulo'	    		=>	$_POST["titulo"],
				':fecha'	    		=>	$_POST["fecha"],
                ':resumen'	    		=>	$_POST["resumen"],
                ':descripcionNoticia'	=>	$_POST["descripcionNoticia"],

				':imagen'				=>	$image,
				':id'					=>	$_POST["noticia_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Noticia Actualizado';
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