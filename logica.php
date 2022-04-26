<?php
require "datos/conexion.php";

$valor = $_POST['valor'];
$cliente = $_POST['cliente'];
$solicitud = $_POST['solicitud'];
$servicio = $_POST['servicio'];
$valorMano = $_POST['valorMano'];
$material = $_POST['material'];

$sql = "SELECT * FROM usuario WHERE idUsuario = '$cliente'";

$resultado = $mysqli->query($sql);

$row = $resultado->fetch_assoc();

$sql2 = "SELECT * FROM servicios WHERE idServicio = '$servicio'";

$resultado2 = $mysqli->query($sql2);

$row2 = $resultado2->fetch_assoc();

//
$sql3 = "SELECT * FROM solicitudcotizacion WHERE idSolicitud = '$solicitud'";

$resultado3 = $mysqli->query($sql3);

$row3 = $resultado3->fetch_assoc();


$total = $valor + $valorMano + $material;






include('vista/encabezado-admin.php');
?>

<div class="col-lg-12">
    <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color: #f5f5f5;">
        <div class="card-header">
            <h3 class="text-center font-weight-light my-4">
                Detalle
            </h3>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3">
                <p>Valor: <b><?php echo $total; ?></b></p>
            </div>
            <div class="form-floating mb-3">
                <p>Nombre del Cliente: <b><?php echo $row['nombre']; ?></b></p>
            </div>
            <div class="form-floating mb-3">
                <p>Id de la solicitud: <b><?php echo $solicitud; ?></b></p>
            </div>
            <div class="form-floating mb-3">
                <p>Nombre del servicio: <b><?php echo $row2['nombreServicio']; ?></b></p>
            </div>
            <div class="form-floating mb-3">
                <p>Descripción del pedido: <br><b><?php echo $row3['detalleDeLaCotizacion']; ?></b></p>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <form action="guardarCotizacion.php" method="POST">
                    <input type="hidden" value="<?php echo $valor; ?>" name="valorServicio">
                    <input type="hidden" value="<?php echo $total; ?>" name="valorCotizacion">
                    <input type="hidden" value="<?php echo $cliente; ?>" name="usuario">
                    <input type="hidden" value="<?php echo $solicitud; ?>" name="solicitud">
                    <input type="hidden" value="<?php echo $servicio; ?>" name="servicio">
                    <input type="submit" value="Guardar" class="btn btn-primary">
                </form>
                <a href="cotizacion.php" class="btn btn-default">Regresar</a>
            </div>
        </div>
    </div>
</div>

<?php
include('vista/pie.php');
?>>