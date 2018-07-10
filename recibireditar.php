<?php include('conexion.php');?>
<?php 

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$desc=$_POST['desc'];
$stock=$_POST['stock'];
$fecha=$_POST['fecha'];


$rutaservidor='img';
$rutatemporal=$_FILES['imagen2']['tmp_name'];
$nombreimagen=$_FILES['imagen2']['name']; 
$rutadestino=$rutaservidor.'/'.$nombreimagen;



if($_FILES['imagen2']['name']<>""){
	//echo'intento';
	move_uploaded_file($rutatemporal,$rutadestino);
	$a=grabarcambios($id,$nombre,$desc,$precio,$stock,$rutadestino,$fecha);
}else{
	//echo'no intento';
	 $recuperoarray = $encontrarreg($id);
	 $rutadestino=$recuperoarray['imagen'];
	 $a=grabarcambios($id,$nombre,$desc,$precio,$stock,$rutadestino,$fecha);
}
?>
<html> 
	<head>
		<meta http-equiv="Refresh" content="1; url=admin.php">
	</head>
</html>
