<?php 
include("../encabezado.php");
include("../menu.php"); 

$id = $_GET["id"];

$query = "SELECT * FROM tb_empleados WHERE id_clave =  $id";
$resultado = $base->consulta($query);

while ($datos = $base->fetch_array($resultado)) { 

    $id=$datos['id_clave'];
    $nombre = $datos['nombre'];
    $apellidop = $datos['apellidoPaterno'];
    $apellidom = $datos['apellidoMaterno'];
    $rfc = $datos['rfc'];
    $curp = $datos['curp'];
    $claveInter = $datos['claveInterbancaria'];
    $numeroCuenta = $datos['numeroCuenta'];
    $tipopago = $datos['fk_tipoPago'];
    $banco = $datos['fk_banco'];
    $sueldo = $datos['fk_sueldo'];
  }

?>
            <div id="layoutSidenav_content">
                <main><br><br>
                    <div class="container">
                        <div class="row">
                            <div class="card col-md-12">
                            <div class="card-header">
                                Nuevo Empleado
                            </div>
                            <div class="card-body">
                                <form method="POST" id="updateformEmpleado" name="updateformEmpleado">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>"  placeholder="Escribe tu nombre" required>
                                      </div>

                                      <div class="form-group col-md-3">
                                        <label for="apellidop">Apellido Paterno</label>
                                        <input type="text" class="form-control" id="apellidop" name="apellidop" value="<?php echo $apellidop; ?>"  placeholder="Escribe tu Apellido Paterno" required>
                                      </div>

                                      <div class="form-group col-md-3">
                                        <label for="apellidom">Apellido Materno (Opcional)</label>
                                        <input type="text" class="form-control" id="apellidom" name="apellidom" value="<?php echo $apellidom; ?>" placeholder="Escribe tu Apellido Materno">
                                      </div>
                                 

                                      <div class="form-group col-md-6">
                                        <label for="rfc">RFC</label>
                                        <input type="text" class="form-control" id="rfc" name="rfc" value="<?php echo $rfc; ?>"  placeholder="Escribe tu RFC" required>
                                      </div>

                                      <div class="form-group col-md-6">
                                        <label for="curp">CURP</label>
                                        <input type="text" class="form-control" id="curp" name="curp" value="<?php echo $curp; ?>"  placeholder="Escribe tu CURP" required>
                                      </div>

                                      <div class="form-group col-md-6">
                                        <label for="claveInter">Clave Interbancaria</label>
                                        <input type="text" class="form-control" id="claveInter" name="claveInter" value="<?php echo $claveInter; ?>"  placeholder="Escribe tu clave Interbancaria" required>
                                      </div>

                                      <div class="form-group col-md-6">
                                        <label for="numeroCuenta">Número de cuenta</label>
                                        <input type="text" class="form-control" id="numeroCuenta" name="numeroCuenta" value="<?php echo $numeroCuenta; ?>"   placeholder="Escribe tu Número de cuenta" required>
                                      </div>

                                      <div class="form-group col-md-6">
                                        <label for="tipopago">Forma de pago</label>
                                         <select class="form-control" id="tipopago" name="tipopago" required>
                                             <?php echo $base->selecFormaPago($tipopago); ?>
                                         </select>
                                      </div>

                                     <div class="form-group col-md-3">
                                        <label for="banco">Banco</label>
                                         <select class="form-control" id="banco" name="banco" required>
                                             <?php echo $base->selecBanco($banco); ?>
                                         </select>
                                      </div>

                                      <div class="form-group col-md-3">
                                        <label for="sueldo">Sueldo</label>
                                         <select class="form-control" id="sueldo" name="sueldo" required>
                                             <?php echo $base->selecSueldo($sueldo); ?>
                                         </select>
                                      </div>
                                      <input type="hidden" id="id" name="id" value="<?php echo $id ?>">

                                     </div><br><br>
                                     <a class="btn btn-secondary" href="index.php">Salir</a>
                                     <button class="btn btn-primary" type="submit" id="btnGuardar">Guardar</button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </main>
<?php include("../pie.php"); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../js/reportes/funciones.js"></script>