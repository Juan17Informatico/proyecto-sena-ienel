<?php

require "datos/conexion.php";

$idServicio = $_GET['idServicio'];

$sql = "SELECT * FROM servicios WHERE idServicio = '$idServicio'";

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
                        Actualizar servicio
                    </h3>
                </div>
                <div class="card-body">
                    <form action="modificar-servicio.php" method="POST">
                        <input class="form-control" id="idServicio" type="hidden" value="<?php echo $row['idServicio']; ?>" name="idServicio" />

                        <!---->


                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="name" placeholder="Servicio" name="name" value="<?php echo $row['nombreServicio']; ?>" required />
                            <label for="name">Servicio</label>
                        </div>
                        <div class="form-floating mb-3">

                            <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" style="height: 150px;" required><?php echo $row['descripcion']; ?></textarea>
                            <label for="descripcion">Descripción</label>

                        </div>
                        <div class="row mb-3">

                            <!---->
                            <div class="col-md-6">
                                <!---->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="valor" type="text" placeholder="valor" value="<?php echo $row['valor'] ?>" name="valor" />
                                        <label for="valor">Valor</label>
                                    </div>
                                </div>
                                <!---->
                            </div>
                        
                            <!---->

                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <a href="administrar-servicios.php" class="btn btn-default">Regresar</a>
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