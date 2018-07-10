<?php include('conexion2.php');?>
<?php include('conexion.php');?>

<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>

<html>
 
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/users_estilo2.css">
    <title>Administración</title>
    <link rel="shortcut icon" href="img/icon.png">
  </head>
  
<body >

	<header class="header">
		<strong>LIBCOM</strong>
	</header>

	<table id=tabla1 align="center">
		<tr>
		  <th width="267" >ADMINISTRADOR  DEL   SITIO</th>
		  <th width="250" ><strong><?php echo $_SESSION['user'];?></strong></th>
		  <th width="120"><a href="desconectar.php"> Cerrar Sesión </a></th>
		</tr>
	</table>

<br>
<br>

	<table id=tabla2 align="center">
		<tr>
		  <th colspan="6" align="center">TABLA DE USUARIOS</th>
		</tr>
		<tr>
		  <th id=fil2 >ID</th>
		  <th id=fil2>Usuario</th>
		  <th id=fil2>Contraseña</th>
		  <th id=fil2>Correo</th>
		  <th id=fil2>Contraseña de Administrador</th>
		  <th id=fil2>Borrar</th>
		</tr>

		<?php

			$consulta=mysqli_query($mysqli,"SELECT * FROM login3");
			while ($filas=mysqli_fetch_array($consulta)) {
				$id=$filas['id'];
				$user=$filas['user'];
				$password=$filas['password'];
				$email=$filas['email'];
				$pasadmin=$filas['pasadmin'];
				$rol=$filas['rol'];
		  ?>
		<tr>
		  <td><?php echo $id ?></td>
		  <td><?php echo $user ?></td>
		  <td><?php echo $password ?></td>
		  <td><?php echo $email ?></td>
		  <td><?php echo $pasadmin ?></td>
		  <td><form action="borrarusuarios.php" method="post">
			<input name="id" type="hidden" value="<?php echo $id ?>">
			<input type="submit" name="" value="Borrar"></form> 
		  </td>
		</tr>
			<?php } 
			?> 
	</table>

<br>
<br>
 
	<form id="form1" name="form1" method="post"> </form>

	  <table id=tabla3 align="center">

		  <tr>
			<th colspan="10">EDICIÓN DE PRODUCTOS</th>
		  </tr>
		  <tr>
			<th>ID</th>
			<th>Imagen</th>
			<th>Título</th>
			<th>Autor</th>
			<th>Descripción</th>
			<th>Precio</th>
			<th>Editorial</th>
			<th>Stock</th>
			<th>Fecha</th>
			<th>Borrar</th>
		  </tr>  

	<?php

			$consulta=mysqli_query($db_connection,"SELECT * FROM productos2");
			while ($filas=mysqli_fetch_array($consulta)) {
				$id=$filas['id'];
				$imagen=$filas['imagen'];
				$nombre=$filas['nombre'];
				$autor=$filas['autor'];
				$desc=$filas['descripcion'];
				$precio=$filas['precio'];
				$editorial=$filas['editorial'];
				$stock=$filas['stock'];
				$fecha=$filas['fecha'];


	?>


		  <tr>
			<td><?php echo $id ?></td>
			<td><img src="<?php echo $imagen; ?>" width="120" height="120"><br></td>
			<td><?php echo $nombre ?></td>
			<td><?php echo $autor ?></td>
			<td><?php echo $desc ?></td>
			<td><?php echo $precio ?></td>
			<td><?php echo $editorial ?></td>
			<td><?php echo $stock ?></td>
			<td><?php echo $fecha ?></td>
			<td>
				<form action="borrar.php" method="post">
					<input name="id" type="hidden" value="<?php echo $id ?>">
					<input type="submit" name="" value="Borrar"></form>
				</form></td>
		  </tr>
		  <p>
		  <?php } 
			?>        
	</table>

<br>
<br>
<div class="verius" align="center">
		<div class="block">
		<p>Verificación de Usuarios:</p>
		<form> 
				 Buscar: <input type="text"  onkeyup="mostrar2(this.value)">
		</form>
				<div id="info2"></div> 
				<script type="text/javascript">
					var resultado2=document.getElementById("info2");
					function mostrar2(user){
						var xmlhttp;
						if(window.XMLHttpRequest){
							xmlhttp = new XMLHttpRequest();
						}else{
							xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
						}
						if(user.length === ""){
							resultado2.innerHTML="";
						}else{
							xmlhttp.onreadystatechange=function(){
								if(xmlhttp.readyState === 4 && this.status === 200){
									resultado2.innerHTML =xmlhttp.responseText; 
								}
							}
					xmlhttp.open("GET","servidor2.php?user="+user,true);
					xmlhttp.send();
				}
			}
				</script>
	</div>
	<br><br>
	<div class="block">
		<p>Verificación de Productos:</p>
		<form> 
				 Buscar: <input type="text"  onkeyup="mostrar(this.value)">
		</form>
				<div id="info"></div> 
				<script type="text/javascript">
					var resultado=document.getElementById("info");
					function mostrar(nombre){
						var xmlhttp;
						if(window.XMLHttpRequest){
							xmlhttp = new XMLHttpRequest();
						}else{
							xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
						}
						if(nombre.length === ""){
							resultado.innerHTML="";
						}else{
							xmlhttp.onreadystatechange=function(){
								if(xmlhttp.readyState === 4 && this.status === 200){
									resultado.innerHTML =xmlhttp.responseText; 
								}
							}
				
					xmlhttp.open("GET","servidor.php?nombre="+nombre,true);
					xmlhttp.send();
				}
			}
				</script>
	</div>
	<br>
	<br>
	<br>

	<div align="center">
		<form action="agregarusuarios.php" method="post" name="agregar">
				<input class="boton" type="submit" value="Agregar Usuario">
		</form>
	</div>

	<br>
	<br>

	<div align="center">
		<form action="agregarproducto.php" method="post" name="agregar">
				<input class="boton" type="submit" value="Agregar Producto">
		</form>
	</div>

	<hr>

	<footer class="footer">
		<br><br>
	</footer>
</div>

</body>
</html>
