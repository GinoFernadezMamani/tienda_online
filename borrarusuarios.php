<?php include('conexion2.php');?>


<?php 
// Actualizamos en funcion del id que recibimos 

$id = $_POST['id']; 


$query = "delete from login3 where id = '$id'";  
$result = mysqli_query($mysqli,$query);  
 

echo " 
<p>El registro ha sido eliminado con exito.</p> " 
?> 

<!doctype html>
<html> 
  <head>
    <meta http-equiv="Refresh" content="1; url=admin.php">
  </head>
</html>