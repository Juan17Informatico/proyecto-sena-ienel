<?php

require 'datos/conexion.php';

$id = $_GET['idUsuario'];


$sql = "UPDATE usuario SET estado = 1  WHERE idUsuario = '$id'";

$resultado = $mysqli->query($sql);
?>

<?php require_once "alertas/alerta.php" ?>



<div class="container">
	<div class="row">
		<div class="row" style="text-align:center">
			<?php if ($resultado) {
				Alerta::eliminado();
				header("refresh:1;administrar-clientes.php");
				
			} else {
				Alerta::error();
				header("refresh:1;administrar-clientes.php");
				
			} ?>

		</div>
	</div>
</div>