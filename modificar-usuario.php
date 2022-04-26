<?php

require 'datos/conexion.php';

$id = $_POST['idUsuario'];
$tipoUsuario = $_POST['tipoUsuario'];
$telefono = $_POST['telefono'];
$nombre = $_POST['name'];
$correo = $_POST['email'];

$sql = "UPDATE usuario SET tipoUsuario = '$tipoUsuario', telefono = '$telefono', nombre = '$nombre', correo = '$correo' WHERE idUsuario = '$id'";

$resultado = $mysqli->query($sql);
?>

<?php require_once "alertas/alerta.php" ?>



<div class="container">
	<div class="row">
		<div class="row" style="text-align:center">
			<?php if ($resultado) {
				Alerta::modificar();
				header("refresh:1;administrar-clientes.php");
				
			} else {
				Alerta::error();
				header("refresh:1;administrar-clientes.php");
				
			} ?>

		</div>
	</div>
</div>