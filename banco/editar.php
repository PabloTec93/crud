<?php 
include("../encabezado.php");
include("../menu.php"); 

$id = $_GET["id"];

$query = "SELECT * FROM tb_banco WHERE id_banco =  $id";
$resultado = $base->consulta($query);

while ($datos = $base->fetch_array($resultado)) { 

    $id=$datos['id_banco'];
    $nombreBanco = $datos['nombreBanco'];
    $estado = $datos['estado'];
  }

?>
            <div id="layoutSidenav_content">
                <main><br><br>
                    <div class="container">
                        <div class="row">
                            <div class="card col-md-12">
                            <div class="card-header">
                                Nuevo Banco
                            </div>
                            <div class="card-body">
                                <form method="POST" id="updateformBanco" name="updateformBanco">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                        <label for="nombreBanco">Nombre</label>
                                        <input type="text" class="form-control" id="nombreBanco" name="nombreBanco" value="<?php echo $nombreBanco; ?>"  placeholder="Escribe del Banco" required>
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
<script src="../js/banco/funciones.js"></script>