<?php

$consulta=mysql_query("select * from productos");
while ($filas=mysql_fetch_array($consulta)) {
	$id=$filas['id'];
	$imagen=$filas['imagen'];
	$nombre=$filas['nombre'];
	$desc=$filas['descripcion'];
	$precio=$filas['precio'];
	$stock=$filas['stock'];
	$fecha=$filas['fecha'];

?>

<?php echo $desc;?><br>
<img src="<?php echo $ruta; ?>" width="180" height="212"><br>

<?php } 
?>