
<?php
	include "../../db/DBController.php";
    $base =  new DBController();
			
			
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

	$sql = "INSERT INTO `tb_empleados` (`nombre`, `apellidoPaterno`, `apellidoMaterno`, `rfc`, `curp`, `claveInterbancaria`, `numeroCuenta`, `fk_tipoPago`, `fk_banco`, `fk_sueldo`, `fechaCrea`) VALUES ('$nombre', '$apellidop', '$apellidom', '$rfc', '$curp', '$claveInter', '$numeroCuenta', '$tipopago', '$banco', '$sueldo', '$ahora')";
	$result = $base->consulta($sql);
			
	if(!$result){
		$response['status'] = 0;
		$response['message'] = $sql;

	} else {
		$response['status'] = 1;
		$response['message'] = 'Registro insertado correctamente.!';
	}


echo json_encode($response);