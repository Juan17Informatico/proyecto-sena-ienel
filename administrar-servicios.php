<?php

require "datos/conexion.php";


$sql = "SELECT * FROM servicios WHERE estado = 0";

$resultado = $mysqli->query($sql);

include('vista/encabezado-admin.php');



?>

<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Administrar<b> Servicios</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="registrar-servicios.php" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo servicio</span></a>
                    </div>

                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id-Servicio</th>
                        <th>Nombre-Servicio </th>
                        <th>Descripcion</th>
                        <th>Valor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
                    ?>

                        <tr>

                            <td>
                                <?php echo $row['idServicio']; //Este campo es como va en la DB 
                                ?>
                            </td>
                            <td>
                                <?php echo $row['nombreServicio']; ?>
                            </td>
                            <td>
                                <?php echo $row['descripcion']; ?>
                            </td>
                            <td>
                                <?php echo $row['valor']; ?>
                            </td>
                            <td>
                                <div class="text-center">
                                    <div class="btn-group">
                                        <!---->
                                        <a href="actualizar-servicios.php?idServicio=<?php echo $row['idServicio']; ?>" class="btn btn-primary edit" name="editar">Editar</a>
                                        <a href="#" data-href="servicio-eliminado.php?idServicio=<?php echo $row['idServicio']; ?>" data-toggle="modal" class="btn btn-danger" data-target="#confirm-delete">Borrar</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Delete Modal HTML -->
<div id="confirm-delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Eliminar servicio</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de querer borrar el servicio?</p>
                <p class="text-danger"><small>Esta acción no puede deshacerse</small></p>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <a class="btn btn-danger btn-ok" value="">Eliminar</a>
            </div>

        </div>
    </div>
</div>





<?php
include('vista/pie.php');
?>