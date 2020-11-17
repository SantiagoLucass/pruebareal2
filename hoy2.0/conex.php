	<?php

	$conexion=mysqli_connect('localhost','root','');

	mysqli_select_db($conexion,'prueba');
	if (!$conexion) {
		echo "error 404 perry";
	}
	?>