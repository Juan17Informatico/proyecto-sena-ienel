<?php

require "datos/conexion.php";


$sql = "SELECT * FROM usuario WHERE estado = 0";

$resultado = $mysqli->query($sql);

include('vista/encabezado-admin.php');



?>

<div class="container">
  <div class="table-responsive">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
            <h2>Administrar<b> Usuarios</b></h2>
          </div>
          <!-- <div class="col-sm-6">
            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
          </div>-->

        </div>

      </div>
      <table class="table table-striped table-hover" id="tabla">
        <thead>
          <tr>
            <th>ID</th>
            <th>identificación</th>
            <th>Tipo de cliente</th>
            <th>Nombre/Empresa</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
          ?>

            <tr>

              <td>
                <?php echo $row['idUsuario']; ?>
              </td>
              <td>
                <?php echo $row['identificacion']; ?>
              </td>
              <td>
                <?php echo $row['tipoUsuario']; ?>
              </td>
              <td>
                <?php echo $row['nombre']; ?>
              </td>
              <td>
                <?php echo $row['correo']; ?>
              </td>
              <td>
                <?php echo $row['telefono']; ?>
              </td>
              <td>
                <div class="text-center">
                  <div class="btn-group">
                    <a href="actualizar-usuarios.php?idUsuario=<?php echo $row['idUsuario']; ?>" class="btn btn-primary edit" name="editar">Editar</a>
                    <a href="#" data-href="usuario-eliminado.php?idUsuario=<?php echo $row['idUsuario']; ?>" data-toggle="modal" class="btn btn-danger" data-target="#confirm-delete">Borrar</a>
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
        <h4 class="modal-title">Eliminar usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <p>¿Estás seguro de querer borrar el usuario?</p>
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