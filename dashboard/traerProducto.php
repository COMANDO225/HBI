<?php
include('../database/conexion.php');
include('../dashboard/functionProducto.php');
$query = '';
$output = array();
$query .= "SELECT * FROM productos ";

if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE nombre LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR subnombre LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR iconpais LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR procedencia LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR fabricante LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR aplicacion LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR valores LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR descripcion LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY id DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $conexion->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	$image = '';
	if($row["image"] != '')
	{
		$image = '<img src="../dashboard/uploads/'.$row["image"].'" class="img-thumbnail p-0 border-0 rounded-1" width="70" height="55" />';
	}
	else
	{
		$image = '';
	}
	$sub_array = array();
	$sub_array[] = $row["id"];
	$sub_array[] = $row["nombre"];
	$sub_array[] = $row["subnombre"];
    $sub_array[] = $row["iconpais"];
    $sub_array[] = $row["procedencia"];
    $sub_array[] = $row["fabricante"];
    $sub_array[] = $row["aplicacion"];
    $sub_array[] = $row["valores"];
    $sub_array[] = $row["descripcion"];
    $sub_array[] = $image;

	$sub_array[] = "<div style='width: 130px;'>
						<div class='d-flex flex-column' style='width: 110px; margin:auto'>
							<button type='button' name='watch' id='".$row['id']."' class='d-flex btn btn-success watch'>
								<i class='bi bi-eye-fill'></i>
								<span class='mx-2'>Ver</span>
							</button>
							<button type='button' name='update' id='".$row['id']."' class='d-flex btn btn-warning update' style='margin: 2px 0;'>
								<i class='bi bi-pencil-fill'></i>
								<span class='mx-2'>Editar</span> 
							</button>
							<button type='button' name='delete' id='".$row['id']."' class='d-flex btn btn-danger delete'>
								<i class='bi bi-trash-fill'></i>
								<span class='mx-2'>Eliminar</span>
							</button>
						</div>
                    </div>";
							
	// $sub_array[] = '<button type="button" name="delete" id="Hola" class="btn btn-danger btn-xs delete">ke</button>';
	
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>
