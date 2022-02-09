<?php

include "../../db/DBController.php";
$base =  new DBController();
$valor="";

$f1=$_POST['f1'];
$f2=$_POST['f2'];


$query = "SELECT * FROM tb_empleados where date(fechaCrea) between '$f1' AND '$f2' ORDER BY nombre ASC";
$resultado = $base->consulta($query);
$n="";

while ($rs = $base->fetch_array($resultado)) { 
  if ($rs['fechaEliminar'] == null) {
    $valor='N/A';
      }else{
        $valor=$rs['fechaEliminar'];
      }
    ?>     
            <tr>
              <th scope="row"><?php echo $rs['id_clave']; ?></th>
              <td><?php echo $rs['nombre']; ?></td>
              <td><?php echo $rs['apellidoPaterno']; ?></td>
              <td><?php echo $rs['apellidoMaterno']; ?></td>
              <td><?php echo $base->obtenerSueldo($rs['fk_sueldo']); ?></td>
              <td><?php echo $rs['fechaCrea']; ?></td>
              <td><?php echo $valor; ?></td>
              <td><?php echo $rs['curp']; ?></td>
              <td><?php echo $rs['rfc']; ?></td>
              <td>
                
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="editar.php?id=<?php echo $rs['id_clave']; ?>" class="btn btn-primary btn-sm">Editar</i></a>
                <a onclick="eliminar(<?php echo $rs['id_clave']; ?>)" class="btn btn-secondary btn-sm text-white">Eliminar</a>
                  </div>
              </td>
            </tr>
<?php } ?>
