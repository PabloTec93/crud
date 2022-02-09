<?php 
include("../encabezado.php");
include("../menu.php"); ?>
            <div id="layoutSidenav_content">
                <main><br><br>
                    <div class="container">
                        <div class="row">
                            <div class="card col-md-12">
                            <div class="card-header">
                                Nuevo Banco
                            </div>
                            <div class="card-body">
                                <form method="POST" id="formBanco" name="formBanco">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                        <label for="nombreBanco">Nombre del Banco</label>
                                        <input type="text" class="form-control" id="nombreBanco" name="nombreBanco"  placeholder="Escribe del Banco" required>
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
<script src="../js/banco/funciones.js"></script>