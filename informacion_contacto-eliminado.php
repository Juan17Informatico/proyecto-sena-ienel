<?php

require 'datos/conexion.php';

$id = $_GET['id'];


$sql = "UPDATE datoscontacto SET estado = 1  WHERE id = '$id'";

$resultado = $mysqli->query($sql);
?>

<?php require_once "alertas/alerta.php" ?>



<div class="container">
	<div class="row">
		<div class="row" style="text-align:center">
			<?php if ($resultado) {
				Alerta::eliminado();
				header("refresh:1;administrar-contacto.php");
				
			} else {
				Alerta::error();
				header("refresh:1;administrar-contacto.php");
				
			} ?>

		</div>
	</div>
</div>