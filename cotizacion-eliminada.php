<?php

require 'datos/conexion.php';

$id = $_GET['idCotizacion'];


$sql = "UPDATE cotizacion SET estado = 1  WHERE idCotizacion = '$id'";

$resultado = $mysqli->query($sql);
?>

<?php require_once "alertas/alerta.php" ?>



<div class="container">
	<div class="row">
		<div class="row" style="text-align:center">
			<?php if ($resultado) {
				Alerta::eliminado();
				header("refresh:1;administrar-cotizaciones.php");
				
			} else {
				Alerta::error();
				header("refresh:1;administrar-cotizaciones.php");
				
			} ?>

		</div>
	</div>
</div>