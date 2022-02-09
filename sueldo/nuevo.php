<?php 
include("../encabezado.php");
include("../menu.php"); ?>
            <div id="layoutSidenav_content">
                <main><br><br>
                    <div class="container">
                        <div class="row">
                            <div class="card col-md-12">
                            <div class="card-header">
                                Nuevo Sueldo
                            </div>
                            <div class="card-body">
                                <form method="POST" id="formsueldo" name="formsueldo">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                        <label for="sueldo">Sueldo</label>
                                        <input type="text" class="form-control" id="sueldo" name="sueldo"  placeholder="Escribe el sueldo" required>
                                      </div>

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
<script src="../js/sueldo/funciones.js"></script>