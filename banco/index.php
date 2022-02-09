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
                                Lista de Bancos
                            </div>
                            <div class="card-body">
                                <a class="btn btn-primary" href="nuevo.php">Nuevo</a><br><br>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>ESTADO</th>
                                            <th>...</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>ESTADO</th>
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
<script src="../js/banco/funciones.js"></script>