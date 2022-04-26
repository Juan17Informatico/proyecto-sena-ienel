<?php

require "datos/conexion.php";

$idUsuario = $_GET['idUsuario'];

$sql = "SELECT * FROM usuario WHERE idUsuario = '$idUsuario'";

$resultado = $mysqli->query($sql);

$row = $resultado->fetch_array(MYSQLI_ASSOC);

include('vista/encabezado-admin.php');



?>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color: #f5f5f5;">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">
                        Actualizar usuario
                    </h3>
                </div>
                <div class="card-body">
                    <form action="modificar-usuario.php" method="POST">
                        <input class="form-control" id="idUsuario" type="hidden" value="<?php echo $row['idUsuario']; ?>" name="idUsuario" />

                        <!---->

                        <div class="form-floating mb-3">
                            <input class="form-control" id="identificacion" type="text" value="<?php echo $row['identificacion']; ?>" placeholder="identificacion" name="identificacion" disabled />
                            <label for="identificacion">Cédula / NIT</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="name" placeholder="Nombre Completo / Nombre Empresa" name="name" value="<?php echo $row['nombre']; ?>" required />
                            <label for="name">Nombre Completo / Nombre Empresa</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" value="<?php echo $row['correo']; ?>" name="email" required />
                            <label for="inputEmail">Correo electrónico</label>
                        </div>
                        <div class="row mb-3">

                            <!---->
                            <div class="col-md-6">
                                <!---->
                                <div class="form-floating mb-3">
                                    <select class="form-control" name="tipoUsuario" id="tipoUsuario">
                                        <option value="Empresa" <?php if ($row['tipoUsuario'] == 'Empresa') echo 'selected'; ?>>Empresa</option>
                                        <option value="Persona" <?php if ($row['tipoUsuario'] == 'Persona') echo 'selected'; ?>>Persona</option>
                                        <option value="Admin" <?php if ($row['tipoUsuario'] == 'Admin') echo 'selected'; ?>>Administrador</option>
                                    </select>
                                    <label for="tipoUsuario"> Tipo de cliente </label>
                                </div>
                                <!---->
                            </div>
                            <!---->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="telefono" type="text" placeholder="Teléfono" value="<?php echo $row['telefono'] ?>" name="telefono" />
                                    <label for="telefono">Teléfono</label>
                                </div>
                            </div>
                            <!---->

                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <a href="administrar-clientes.php" class="btn btn-default">Regresar</a>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






<?php
include('vista/pie.php');
?>