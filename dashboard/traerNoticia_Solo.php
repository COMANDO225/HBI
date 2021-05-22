<?php
include('../database/conexion.php');
include('../dashboard/functionNoticia.php');

if(isset($_POST["noticia_id"]))
{
	$output = array();
	$statement = $conexion->prepare(
		"SELECT * FROM noticias
		WHERE id = '".$_POST["noticia_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["titulo"] = $row["titulo"];
		$output["fecha"] = $row["fecha"];
        $output["resumen"] = $row["resumen"];
        $output["descripcionNoticia"] = $row["descripcionNoticia"];
		if($row["imagen"] != '')
		{
			$output['noticia_image'] = '<img src="../dashboard/uploads/'.$row["imagen"].'" class="img-thumbnail p-0 border-0 rounded-0" width="60" height="45" /><input type="hidden" name="hidden_noticia_image" value="'.$row["imagen"].'" />';
		}
		else
		{
			$output['noticia_image'] = '<input type="hidden" name="hidden_noticia_image" value="" />';
		}
	}
	echo json_encode($output);
}
?>