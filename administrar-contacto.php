<?php

require "datos/conexion.php";


$sql = "SELECT * FROM datoscontacto WHERE estado = 0";

$resultado = $mysqli->query($sql);

include('vista/encabezado-admin.php');



?>

<div class="container">
  <div class="table-responsive">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
            <h2><b>Solicitudes de Información</b></h2>
          </div>
          <!-- <div class="col-sm-6">
            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
          </div>-->

        </div>
      </div>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Comentario</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
          ?>

            <tr>

              <td>
                <?php echo $row['id']; ?>
              </td>
              <td>
                <?php echo $row['nombre']; ?>
              </td>
              <td>
                <?php echo $row['correo']; ?>
              </td>
              <td>
                <?php echo $row['comentario']; ?>
              </td>
              <td>
                <?php echo $row['estadoRespuesta']; ?>
              </td>
              <td>
                <div class="text-center">
                  <div class="btn-group">
                    <a href="#" data-href="informacion_contacto-eliminado.php?id=<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger" data-target="#confirm-delete">Borrar</a>
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