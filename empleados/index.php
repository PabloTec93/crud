<?php 
include("../encabezado.php");
include("../menu.php"); ?>
            <div id="layoutSidenav_content">
                <main><br><br>
                    <div class="container">
                        <div class="row">
                            <div class="card col-md-12">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Lista de Empleados
                            </div>
                            <div class="card-body">
                                
                                <div class="input-group">
                                  <input type="date" class="form-control" placeholder="Fecha Inicial" id="fecha1" name="fecha1" >
                                  <input type="date" class="form-control" placeholder="Fecha Final" id="fecha2" name="fecha2" >
                                  <div class="input-group-append">
                                    <a class="btn btn-outline-secondary" onclick="buscar();">Buscar</a>
                                    <a href="index.php" class="btn btn-outline-secondary">Limpiar</a>
                                    <a class="btn btn-outline-secondary" onclick="exportar();">Reporte</a>
                                    <a class="btn btn-outline-secondary" href="nuevo.php">Nuevo</a>
                                  </div>
                                </div>
                                <br><br>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>APELLIDO_PATERNO</th>
                                            <th>APELLIDO_MATERNO</th>
                                            <th>SUELDO_MENSUAL</th>
                                            <th>FECHA_INGRESO</th>
                                            <th>FECHA_BAJA</th>
                                            <th>CURP</th>
                                            <th>RFC</th>
                                            <th>...</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>APELLIDO_PATERNO</th>
                                            <th>APELLIDO_MATERNO</th>
                                            <th>SUELDO_MENSUAL</th>
                                            <th>FECHA_INGRESO</th>
                                            <th>FECHA_BAJA</th>
                                            <th>CURP</th>
                                            <th>RFC</th>
                                            <th>...</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="mostrarDatos"></tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </main>
<?php include("../pie.php"); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../js/reportes/funciones.js"></script>