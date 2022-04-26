<?php

require 'datos/conexion.php';

//traemos informacion del formulario
$nombreServicio = $_POST['nombreServicio'];
$descripcion = $_POST['descripcionServicio'];
$valor = $_POST['valor'];


//insertamos valores
$sql = "INSERT INTO servicios(nombreServicio,descripcion,valor)
        VALUES('$nombreServicio','$descripcion','$valor')";

$resultado = $mysqli->query($sql); //ejecutamos el script para que se llene la BD


?>

<?php require_once "alertas/alerta.php" ?>


<div class="container">
	<div class="row">
		<div class="row" style="text-align:center">
			<?php if ($resultado) {
				Alerta::registro2();
				header("refresh:1;administrar-servicios.php");
				
			} else {
				Alerta::error();
				header("refresh:1;registrar-servicios.php");
				
			} ?>

		</div>
	</div>
</div>