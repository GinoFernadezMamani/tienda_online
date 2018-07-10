<?php

include('conexion2.php');

$user=$_GET['user'];
if(!empty($user)){
	$persona2=mysqli_real_escape_string($mysqli,$user);
	$resultado2 = mysqli_query($mysqli,"SELECT * FROM login3 WHERE user LIKE '%".$persona2."%'");

	while ($fila=mysqli_fetch_assoc($resultado2)) {
		echo '<div>'.$fila['user']."</div>";
	}
}

?>


