<?php

require 'datos/conexion.php';

//traemos informacion del formulario
$nombre = $_POST['name'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];
$estado = "PENDIENTE";

//insertamos valores
$sql = "INSERT INTO datoscontacto(nombre,correo,comentario,estadoRespuesta,estado)
        VALUES('$nombre','$email','$comentario','$estado',0)";

$resultado = $mysqli->query($sql); //ejecutamos el script para que se llene la BD


?>

<?php require_once "alertas/alerta.php" ?>


<div class="container">
	<div class="row">
		<div class="row" style="text-align:center">
			<?php if ($resultado) {
				Alerta::registro2();
				header("refresh:1;index.php");
				
			} else {
				Alerta::error();
				header("refresh:1;index.php");
				
			} ?>


		</div>
	</div>
</div>