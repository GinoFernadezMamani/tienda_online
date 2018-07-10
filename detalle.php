<?php
include ('conexion.php');
$consulta=mysqli_query($db_connection,"SELECT * FROM productos2 where id=".$_POST['id']);
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detalles</title>
	<link rel="stylesheet" href="css/detalle_estilo4.css">
	<link rel="shortcut icon" href="img/icon.png">
</head>

<body>

<div class="contenedor">
	<?php
	while($filas=mysqli_fetch_array($consulta)){
			$id=$filas['id'];
			$imagen=$filas['imagen'];
			$autor=$filas['autor'];
			$nombre=$filas['nombre'];
			$desc=$filas['descripcion'];
			$precio=$filas['precio'];
			$editorial=$filas['editorial'];
			$stock=$filas['stock'];
			$fecha=$filas['fecha'];
	?>
	<div class="cajasola">
		<h3><?php echo $nombre?></h3>
		<img src="<?php echo $imagen?>" class="imagen" >
		<p>$<?php echo $precio?></p>
		 <form action="carrito.php" method="post" name="compra" >
			<input name="id_txt" type="hidden" value="<?php echo $id ?>"/>
			<input name="nombre" type="hidden" value="<?php echo $nombre ?>"/>
			<input name="autor" type="hidden" value="<?php echo $autor ?>"/>
			<input name="precio" type="hidden" value="<?php echo $precio ?>"/>
			<input name="editorial" type="hidden" value="<?php echo $editorial ?>"/>
			<input name="cantidad" type="hidden" value="1"/>
			<input type="image" src="img/carrito.jpg" width="40" height="40" >
			<div style="font-size: 12px;">Agregar al carrito</div>
        </form>
		
		
	</div>
	<div class="cajaDes">
		<p><strong>TITULO: </strong><?php echo $nombre?></p>
		<p><strong>AUTOR: </strong> <?php echo $autor ?></p>
		<p><strong>DESCRIPCION: </strong> <?php echo $desc?></p>
		<p><strong>EDITORIAL:  </strong><?php echo $editorial ?></p>
	</div>
	<?php
	}
	?>
</div>
<div>
	<p><input onclick="window.location.href='index2.php'" type="button" name="boton" id="boton" value="Volver" /></p>
</div>

</body>
</html>


