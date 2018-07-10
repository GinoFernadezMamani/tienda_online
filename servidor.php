<?php

include ('conexion.php');

$nombre=$_GET['nombre'];
if(!empty($nombre)){
	$persona=mysqli_real_escape_string($db_connection,$nombre);
	$resultado = mysqli_query($db_connection,"SELECT * FROM productos2 WHERE nombre LIKE '%".$persona."%'");

	while ($fila=mysqli_fetch_assoc($resultado)) {
		echo '<div>'.$fila['nombre']."</div>";
	}
}

?>




