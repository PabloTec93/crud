
<?php
	include "../../db/DBController.php";
    $base =  new DBController();
			
	$id = $_POST['id'];		
	$nombre = $_POST['nombre'];
	$apellidop = $_POST['apellidop'];
	$apellidom = $_POST['apellidom'];
    $rfc = $_POST['rfc'];
    $curp = $_POST['curp'];
    $claveInter = $_POST['claveInter'];
    $numeroCuenta = $_POST['numeroCuenta'];
    $tipopago = $_POST['tipopago'];
    $banco = $_POST['banco'];
    $sueldo = $_POST['sueldo'];

	// seteamos la zona horaria.
	date_default_timezone_set("America/Merida");
	$ahora = date('Y-m-d H:i:s');

	$response = array( 
    'status' => 0, 
    'message' => 'Error en el formulario, inténtelo de nuevo.' 
	); 

	$sql = "UPDATE `tb_empleados` SET `nombre`='$nombre',`apellidoPaterno`='$apellidop',`apellidoMaterno`='$apellidom',`rfc`='$rfc',`curp`='$curp',`claveInterbancaria`='$claveInter',`numeroCuenta`='$numeroCuenta',`fk_tipoPago`='$tipopago',`fk_banco`='$banco',`fk_sueldo`='$sueldo',`fechaModificar`='$ahora' WHERE id_clave = $id";
	$result = $base->consulta($sql);
			
	if(!$result){
		$response['status'] = 0;
		$response['message'] = $sql;

	} else {
		$response['status'] = 1;
		$response['message'] = 'Registro se actualizo correctamente.!';
	}


echo json_encode($response);