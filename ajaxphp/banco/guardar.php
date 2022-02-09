
<?php
	include "../../db/DBController.php";
    $base =  new DBController();
			
			
	$nombreBanco = $_POST['nombreBanco'];


	// seteamos la zona horaria.
	date_default_timezone_set("America/Merida");
	$ahora = date('Y-m-d H:i:s');

	$response = array( 
    'status' => 0, 
    'message' => 'Error en el formulario, inténtelo de nuevo.' 
	); 

	$sql = "INSERT INTO `tb_banco` (`nombreBanco`) VALUES ('$nombreBanco')";
	$result = $base->consulta($sql);
			
	if(!$result){
		$response['status'] = 0;
		$response['message'] = $sql;

	} else {
		$response['status'] = 1;
		$response['message'] = 'Registro insertado correctamente.!';
	}


echo json_encode($response);