<?php include('conexion.php');?>


<?php 
// Actualizamos en funcion del id que recibimos 

$id = $_POST['id']; 


$query = "delete from productos2 where id = '$id'";  
$result = mysqli_query($db_connection,$query);  
 

echo " 
<p>El registro ha sido eliminado con exito.</p> " 
?> 

<!doctype html>
<html> 
  <head>
    <meta http-equiv="Refresh" content="1; url=admin.php">
  </head>
</html>