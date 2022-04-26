<?php

include('vista/encabezado-admin.php');

?>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">
                        Registrar un servicio
                    </h3>
                </div>
                <div class="card-body">
                    <!---->
                    <form method="POST" action="datos-servicios.php" autocomplete="off">
                        <!---->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="nombreServicio" type="text" placeholder="Nombre-Servicio" name="nombreServicio" required />
                            <label for="nombreServicio">Nombre Servicio</label>
                        </div>

                        <!---->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="descripcionServicio" cols="30" rows="10" style="height: 150px;" placeholder="Descripcion-servicio" name="descripcionServicio" required></textarea>
                            <label for="descripcion">Descripción servicio</label>

                        </div>
                        <!---->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="valor" type="text" placeholder="Valor-servicio" name="valor" required />
                            <label for="valor">Valor Servicio</label>
                        </div>
                        <!---->


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