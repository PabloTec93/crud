<?php
class DBController {
	private $host = "localhost";
	private $user = "usuarioMaestro";
	private $password = "PmQxl3LTIqq4Obqd";
	private $database = "bmol";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}

	function consulta($query) {
		$result = mysqli_query($this->conn,$query);
		return $result;
	}


	function ultimoid(){
		return mysqli_insert_id($this->conn);
	}


	function fetch_array($query){
		return mysqli_fetch_array($query);
	}

	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}

	public function selecFormaPago($id) // 
    {
        $query = "SELECT id_formaPago, formaPagos FROM tb_formapagos where estado = 1";

            $resultado  = mysqli_query($this->conn,$query);
            $options="";
            	$options.="<option value='' selected>Seleciona una opción</option>";  
             if($resultado > 0) {
                foreach($resultado as $rs) {
                        if($rs['id_formaPago'] == $id){
                        	$options.="<option value=".$rs['id_formaPago']." selected>".$rs['formaPagos']."</option>";  
                        }else{
                        	$options.="<option value=".$rs['id_formaPago'].">".$rs['formaPagos']."</option>";  
                        }
                }
                return ($options); 
             }
    }

    public function selecBanco($id) // 
    {
        $query = "SELECT id_banco, nombreBanco FROM tb_banco where estado = 1";

            $resultado  = mysqli_query($this->conn,$query);
            $options="";
            	$options.="<option value='' selected>Seleciona una opción</option>";  
             if($resultado > 0) {
                foreach($resultado as $rs) {
                        if($rs['id_banco'] == $id){
                        	$options.="<option value=".$rs['id_banco']." selected>".$rs['nombreBanco']."</option>";  
                        }else{
                        	$options.="<option value=".$rs['id_banco'].">".$rs['nombreBanco']."</option>";  
                        }
                }
                return ($options); 
             }
    }

    public function selecSueldo($id) // 
    {
        $query = "SELECT id_sueldo, sueldo FROM tb_sueldos where estado = 1";

            $resultado  = mysqli_query($this->conn,$query);
            $options="";
            	$options.="<option value='' selected>Seleciona una opción</option>";  
             if($resultado > 0) {
                foreach($resultado as $rs) {
                        if($rs['id_sueldo'] == $id){
                        	$options.="<option value=".$rs['id_sueldo']." selected>".$rs['sueldo']."</option>";  
                        }else{
                        	$options.="<option value=".$rs['id_sueldo'].">".$rs['sueldo']."</option>";  
                        }
                }
                return ($options); 
             }
    }

    public function obtenerSueldo($id) 
	{   if($id == 0){
		return '-';
		} else {
			$strSQL = "SELECT * FROM tb_sueldos WHERE id_sueldo = $id and estado = 1";
	
			$consulta = $this->consulta($strSQL);
			$res = $this->fetch_array($consulta);
			return ($res["sueldo"]);
		}
	}
	
}
?>