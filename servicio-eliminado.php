<?php

require 'datos/conexion.php';

$id = $_GET['idServicio'];


$sql = "UPDATE servicios SET estado = 1  WHERE idServicio = '$id'";

$resultado = $mysqli->query($sql);
?>

<?php require_once "alertas/alerta.php" ?>



<div class="container">
	<div class="row">
		<div class="row" style="text-align:center">
			<?php if ($resultado) {
				Alerta::eliminado();
				header("refresh:1;administrar-servicios.php");
				
			} else {
				Alerta::error();
				header("refresh:1;administrar-servicios.php");
				
			} ?>

		</div>
	</div>
</div>