<?php


require 'datos/conexion.php';

$valor = $_POST['valorServicio'];
$total = $_POST['valorCotizacion'];
$cliente = $_POST['usuario'];
$solicitud = $_POST['solicitud'];
$servicio = $_POST['servicio'];



$sqlR = "INSERT INTO cotizacion(valorServicio,valorCotizacion,usuario,idSolicitud,servicio,estado)
VALUES('$valor','$total','$cliente','$solicitud','$servicio',0)";
$resultadoR = $mysqli->query($sqlR);

?>
<?php require_once "alertas/alerta.php" ?>

<div class="container">
	<div class="row">
		<div class="row" style="text-align:center">
			<?php if ($resultadoR) {
				Alerta::cotizacion();
				header("refresh:1;administrar-cotizaciones.php");
			} else {
				Alerta::error();
				header("refresh:1;administrar-cotizaciones.php");
			} ?>

		</div>
	</div>
</div>
