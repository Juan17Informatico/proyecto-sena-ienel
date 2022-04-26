<?php

require 'datos/conexion.php';

//traemos informacion del formulario
$nombreServicio = $_POST['servicio'];
$detalle = $_POST['detalle'];
$id = $_POST['idUsuario'];
$estado = 0;


//insertamos valores
$sql = "INSERT INTO solicitudcotizacion(detalleDeLaCotizacion,servicio,cliente,estado)
        VALUES('$detalle','$nombreServicio','$id','$estado')";

$resultado = $mysqli->query($sql); //ejecutamos el script para que se llene la BD


?>

<?php require_once "alertas/alerta.php" ?>


<div class="container">
	<div class="row">
		<div class="row" style="text-align:center">
			<?php if ($resultado) {
				Alerta::cotizacion();
				header("refresh:1;servicios.php");
				
			} else {
				Alerta::error();
				header("refresh:1;servicios.php");
				
			} ?>

		</div>
	</div>
</div>