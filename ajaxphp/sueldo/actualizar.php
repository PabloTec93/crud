
<?php
	include "../../db/DBController.php";
    $base =  new DBController();
			
	$id = $_POST['id'];		
	$sueldo = $_POST['sueldo'];


	// seteamos la zona horaria.
	date_default_timezone_set("America/Merida");
	$ahora = date('Y-m-d H:i:s');

	$response = array( 
    'status' => 0, 
    'message' => 'Error en el formulario, inténtelo de nuevo.' 
	); 

	$sql = "UPDATE `tb_sueldos` SET `sueldo`='$sueldo' WHERE id_sueldo = $id";
	$result = $base->consulta($sql);
			
	if(!$result){
		$response['status'] = 0;
		$response['message'] = $sql;

	} else {
		$response['status'] = 1;
		$response['message'] = 'Registro se actualizo correctamente.!';
	}


echo json_encode($response);