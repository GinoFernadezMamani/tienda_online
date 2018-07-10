<?php include('conexion2.php');?>
<?php 
#$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);
#$conexion=mysqli_connect('localhost','root','');
if(isset($mysqli)){

$usuario=$_POST['usuario'];
$password=$_POST['password'];

$email=$_POST['email'];
$pasadmin=$_POST['pasadmin'];
$rol=$_POST['rol'];
}

$sql="INSERT INTO login3 (user,password,email,pasadmin,rol)
	values(
	'".$usuario."',
	'".$password."',
	'".$email."',
	'".$pasadmin."',
	'".$rol."')";
$res=mysqli_query($mysqli,$sql);
if($res){
	echo'inserto un usuario exitosamente';
}else{
	echo('no se pudo insertar al usuario');
}
?>
<!doctype html>
<html> 
	<head>
		<h1>INSERTO UN USUARIO EXITOSAMENTE</h1>
		<meta http-equiv="Refresh" content="1; url=admin.php">
	</head>
</html>