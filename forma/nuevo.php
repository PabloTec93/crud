<?php 
include("../encabezado.php");
include("../menu.php"); ?>
            <div id="layoutSidenav_content">
                <main><br><br>
                    <div class="container">
                        <div class="row">
                            <div class="card col-md-12">
                            <div class="card-header">
                                Nuevo Forma de pago
                            </div>
                            <div class="card-body">
                                <form method="POST" id="formforma" name="formforma">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                        <label for="formaPagos">Forma de pago</label>
                                        <input type="text" class="form-control" id="formaPagos" name="formaPagos"  placeholder="Escribe la forma de pago" required>
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
<script src="../js/forma/funciones.js"></script>