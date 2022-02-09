<?php

include "../../db/DBController.php";
$base =  new DBController();
$valor="";

$query = "SELECT * FROM tb_sueldos ORDER BY sueldo ASC";
$resultado = $base->consulta($query);
$n="";

while ($rs = $base->fetch_array($resultado)) { 
  $st=$rs['estado'];
      if($st == 1){$s='<span class="text-success">Activado</span>';}else{$s='<span class="text-danger">Desactivado</span>';}
    ?>     
            <tr>
              <th scope="row"><?php echo $rs['id_sueldo']; ?></th>
              <td><?php echo $rs['sueldo']; ?></td>
              <td><?php echo $s; ?></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="editar.php?id=<?php echo $rs['id_sueldo']; ?>" class="btn btn-primary btn-sm">Editar</i></a>
                <a onclick="eliminar(<?php echo $rs['id_sueldo']; ?>)" class="btn btn-secondary btn-sm text-white">Eliminar</a>
                  </div>
              </td>
            </tr>
<?php } ?>
