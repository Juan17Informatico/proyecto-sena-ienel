<?php

require "datos/conexion.php";


$sql = "SELECT * FROM solicitudcotizacion WHERE estado = 0";

$resultado = $mysqli->query($sql);

include('vista/encabezado-admin.php');



?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2><b>Solicitudes de Cotización</b></h2>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Descripción</th>
                                <th>Servicio</th>
                                <th>Cliente</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
                            ?>

                                <tr>

                                    <td>
                                        <?php echo $row['idSolicitud']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['detalleDeLaCotizacion']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['servicio']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['cliente']; ?>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <div class="btn-group">
                                                <a href="#" data-href="informacion_contacto-eliminado.php?id=<?php echo $row['idSolicitud']; ?>" data-toggle="modal" class="btn btn-danger" data-target="#confirm-delete">Borrar</a>
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
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h3>
                Realizar Cotización
            </h3>
            <form action="logica.php" method="POST">
                <div class="form-group">
                    <label for="valor">Valor del servicio:</label>
                    <input type="number" class="form-control" id="valor" placeholder="Ingresa el valor del servicio" name="valor" required>
                </div>
                <div class="form-group">
                    <label for="cliente">Id del Cliente:</label>
                    <input type="text" class="form-control" id="cliente" placeholder="Ingresa el id del cliente" name="cliente" required>
                </div>
                <div class="form-group">
                    <label for="solicitud">Id Solicitud</label>
                    <input type="text" class="form-control" id="solicitud" placeholder="Ingresa el numero de la solicitud" name="solicitud" required>
                </div>
                <div class="form-group">
                    <label for="servicio">Ingrese el Id del servicio</label>
                    <input type="text" class="form-control" id="servicio" placeholder="Ingresa el numero del servicio" name="servicio" required>
                </div>
                <div class="form-group">
                    <label for="valorMano">Valor de la mano de obra:</label>
                    <input type="number" class="form-control" id="valorMano" placeholder="Ingresa el valor de la mano de obra" name="valorMano">
                </div>
                <div class="form-group">
                    <label for="material">Valor de los materiales:</label>
                    <input type="number" class="form-control" id="material" placeholder="Ingresa el valor de los materiales" name="material">
                </div>
                <button type="submit" class="btn btn-primary">Cotizar</button>
            </form>
        </div>

    </div>
</div>


<!-- Delete Modal HTML -->
<div id="confirm-delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Eliminar Solicitud de información</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de querer borrar el registro?</p>
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