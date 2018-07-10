<?php include('conexion.php');?>
<?php 
#$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);
#$conexion=mysqli_connect('localhost','root','');
$rutaservidor='img';
$rutatemporal=$_FILES['imagen']['tmp_name'];
$nombreimagen=$_FILES['imagen']['name'];
$rutadestino=$rutaservidor.'/'.$nombreimagen;
move_uploaded_file($rutatemporal,$rutadestino);

$nombre=$_POST['nombre'];
$autor=$_POST['autor'];
$precio=$_POST['precio'];
$desc=$_POST['descripcion'];
$editorial=$_POST['editorial'];
$stock=$_POST['stock'];
$fecha=$_POST['fecha'];

$sql="INSERT INTO productos2 (imagen,nombre,autor,descripcion,precio,editorial,stock,fecha)
	values('".$rutadestino."',
	'".$nombre."',
	'".$autor."',
	'".$desc."',
	'".$precio."',
	'".$editorial."',
	'".$stock."',
	'".$fecha."')";
$res=mysqli_query($db_connection,$sql);
if($res){
	echo'inserto su producto exitosamente';
}else{
	echo('no se pudo insertar su producto');
}
?>
<!doctype html>
<html> 
	<head>
		<h1>INSERTO SU PRODUCTO EXITOSAMENTE</h1>
		   <p><a href="admin.php">Volver</a></p>
	</head>
</html>
