<?php

$id_rol = $_GET['id'];
include('../../app/config.php');
include('../../admin/layout/parte1.php');
include('../../app/controllers/roles/datos_de_roles.php');


?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-12">
                    <h1>Rol: <?= $nombres_rol ?? ''; ?></h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">Datos Registrados</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nombre del Rol</label>
                                <input type="text" value="<?= $nombres_rol ?? ''; ?>" class="form-control" disabled>
                            </div>
                            <hr>
                            <a href="<?=APP_URL;?>/admin/roles" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('../../admin/layout/parte2.php');
include('../../layout/mensajes.php');
?>