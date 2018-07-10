<?php
include ('conexion.php');

$consulta=mysqli_query($db_connection,"SELECT * FROM productos2");


if(isset($_POST['buscar'])){
	$consulta=mysqli_query($db_connection,"SELECT * FROM productos2 where nombre like '%".$_POST['buscar']."%'");
}
?>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==1) {
	header("Location:index2.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/estilos2.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script> 
	<script type="text/javascript" src="js/js.js"></script>
	<link rel="shortcut icon" href="img/Libcomlogo.jpg">
	<meta charset="UTF-8">
	<title>Libros de Computación - LIBCOM</title>
</head>
<body>
	<div class="banner">
		<img  alt="Presentación-Imagen de LIBCOM" src="img/banner.jpg" class="banner"  width="100%" height="150">
	</div>
	<header class="cabecera">
		<nav class="menu">
			<ul>
				<li><a href="desconectar.php"> Cerrar Sesión </a></li>
				<li><a href="index.php"> Inicio </a></li>
				<li><a href="carrito.php"> Ver Carrito </a></li>
		 		<li><a href="registro_form.php"> Registrarse </a></li>
		 		<li style="float: right; margin:30px 50px 0px 0px;">
		 			<form action="index2.php" method="POST">
						<label>Buscar Libro:</label><input type="search" name="buscar" id="buscar" placeholder="Título o parte del título">
						<input type="submit" value="Buscar">
					</form>
				</li>
			</ul>
		</nav>
	</header>
	<div class="cuerpo">
		<nav class="vertical">
			<p id="user">Bienvenido(a):<strong><?php echo $_SESSION['user'];?></strong></p>
			<br>
			<hr>
			<br>
		<figure>
			<img src="img/Libcom2.jpg" alt="Logo de la página" id="logo" />
			<figcaption><center>Encuentra todos los libros de Computación que necesites.</center></figcaption>
		</figure>
			<br>
			<hr >
			<br>
			<p></p>
		</nav>

		<div class="contenedor">
		<?php

			while($filas=mysqli_fetch_array($consulta)){
				$id=$filas['id'];
				$imagen=$filas['imagen'];
				$nombre=$filas['nombre'];
				$autor=$filas['autor'];
				$desc=$filas['descripcion'];
				$editorial=$filas['editorial'];
				$precio=$filas['precio'];
				$stock=$filas['stock'];
				$fecha=$filas['fecha'];
		?>	
			
			<div class="caja">   
				<h4><?php echo $nombre ?></h4>
				<img src="<?php echo $imagen ?>" width="220" height="250">
				<p>$<?php echo $precio ?></p>
				<form action="detalle.php" method="post" name="detalle">
					<input name="id" type="hidden" value="<?php echo $id ?>" />
					<input class="boton" type="submit" value="Detalles">
				</form>
			</div>
			<?php
		    }
		    ?>
		</div>
	</div>

	<aside>
		<footer id="pie">
		<p>&copy; Derechos Reservados - LIBCOM</p>
		</footer>
	</aside>
	
</body>
</html>