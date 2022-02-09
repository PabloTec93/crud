<?php

include "../../db/DBController.php";
$base =  new DBController();
$valor="";

$query = "SELECT * FROM tb_formapagos ORDER BY formaPagos ASC";
$resultado = $base->consulta($query);
$n="";

while ($rs = $base->fetch_array($resultado)) { 
  $st=$rs['estado'];
      if($st == 1){$s='<span class="text-success">Activado</span>';}else{$s='<span class="text-danger">Desactivado</span>';}
    ?>     
            <tr>
              <th scope="row"><?php echo $rs['id_formaPago']; ?></th>
              <td><?php echo $rs['formaPagos']; ?></td>
              <td><?php echo $s; ?></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="editar.php?id=<?php echo $rs['id_formaPago']; ?>" class="btn btn-primary btn-sm">Editar</i></a>
                <a onclick="eliminar(<?php echo $rs['id_formaPago']; ?>)" class="btn btn-secondary btn-sm text-white">Eliminar</a>
                  </div>
              </td>
            </tr>
<?php } ?>
