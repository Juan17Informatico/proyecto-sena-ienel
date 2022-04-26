<?php

require 'datos/conexion.php';

$id = $_POST['idServicio'];
$nombre = $_POST['name'];
$descripcion = $_POST['descripcion'];
$valor = $_POST['valor'];

$sql = "UPDATE servicios SET nombreServicio = '$nombre', descripcion = '$descripcion', valor = '$valor' WHERE idServicio = '$id'";

$resultado = $mysqli->query($sql);
?>

<?php require_once "alertas/alerta.php" ?>



<div class="container">
	<div class="row">
		<div class="row" style="text-align:center">
			<?php if ($resultado) {
				Alerta::modificar();
				header("refresh:1;administrar-servicios.php");
				
			} else {
				Alerta::error();
				header("refresh:1;actualizar-servicios.php");
				
			} ?>

		</div>
	</div>
</div>