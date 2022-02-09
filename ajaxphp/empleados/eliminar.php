
<?php
	include "../../db/DBController.php";
    $base =  new DBController();
			
	$id = $_POST['id_empleado'];		


	// seteamos la zona horaria.
	date_default_timezone_set("America/Merida");
	$ahora = date('Y-m-d H:i:s');

	$response = array( 
    'status' => 0, 
    'message' => 'Error en el formulario, inténtelo de nuevo.' 
	); 

	$sql = "UPDATE `tb_empleados` SET `fechaEliminar`='$ahora', estado='0' WHERE id_clave = $id";
	$result = $base->consulta($sql);
			
	if(!$result){
		$response['status'] = 0;
		$response['message'] = $sql;

	} else {
		$response['status'] = 1;
		$response['message'] = 'Registro se elimino correctamente.!';
	}


echo json_encode($response);