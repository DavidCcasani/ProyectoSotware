<?php
include('../../app/config.php');
include('../../admin/layout/parte1.php');
include('../../app/controllers/roles/listado_de_roles.php');

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Roles</h1>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Roles Registrados</h3>

                            <div class="card-tools">
                                <a class="btn btn-primary" href=" create.php"><i class="bi bi-plus-square"></i> Crear
                                    Nuevo Rol</a>

                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-striped" border="1">
                                <thead>
                                    <tr>
                                        <th><center>Nro</center></th>
                                        <th><center>Nombre del Rol</center></th>
                                        <th><center>Acciones</center></th>

                                    </tr>
                                </thead>
                                <?php
                                $contador_rol = 0;
                                foreach ($roles as $role) {
                                    $id_rol = $role['id_rol'];
                                    $contador_rol++;
                                    ?>
                                    <tr>
                                        <td><center><?= $contador_rol; ?></center></td>
                                        <td><?= $role['nombres_rol']; ?></td>
                                        <td style ="text-align: center;">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="show.php?id=<?= $id_rol;?>" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                                <a href="edit.php?id=<?= $id_rol;?>" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                                <a href="delete.php?id=<?= $id_rol;?>" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </td>

                                    </tr>

                                    <?php
                                }
                                ?>


                            </table>
                        </div>

                    </div>
                </div>



            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php
include('../../admin/layout/parte2.php');
include('../../layout/mensajes.php');
?>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
        "pageLength": 5,
        "language":{
            "empatyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ roles",
            "infoEmpty": "Mostrando 0 a 0 de 0 roles",
            "infoFiltered": "(Filtrado de _MAX_ roles totales)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ roles",
            "loadingRecords": "Cargando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
             
        },
        "responsive": true, "lengthChange": true, "autoWidth": false,
        buttons:[{
            extend:'collection',
            text:'Reportes',
            orientation: 'landscape',
            buttons:[{
                text:'Copiar',
                extend:'copy',
            }, 
                {
                extend:'pdf',
            }, {
                extend:'csv',
            }, {
                extend:'excel',
            }, {
                text: 'Imprimir',
                extend:'print'
            }
            ]
        },  
            {
            extend:'colvis',
            text:'Visor de Columnas',
        
        }

        ],

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>