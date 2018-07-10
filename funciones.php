<?php include('conexion.php');?>
<?php
function borrar($id)
{
	$sql="delete from productos where id=$id";
	mysqli_query($db_connection,$sql);
	echo 'Registro eliminado con exito!';
}

?>
<?php
if(isset($id)){ 
if(isset($db_connection)){
	function encontrarreg($id){
		$consulta="SELECT * FROM productos where id=$id";
		$res=mysqli_query($db_connection,$consulta);
		$fila=mysqli_fetch_array($res);
		return $fila;
		}
}
}
?>
<?php
function grabarcambios($id,$nombre,$desc,$precio,$stock,$imagen,$fecha){
	if(isset($id)){
		if(isset($db_connection)){
		$cad="UPDATE productos set nombre='$nombre',
		descripcion='$desc',
		precio='$precio',
		stock='$stock',
		imagen='$imagen',
		fecha='$fecha' where id=$id";
	    mysqli_query($db_connection,$cad);
		echo'<p>Registro actualizado</p>';
		}
			
	}
}
?>

<?php function verlistadoproductos($modo){ ?> 

<form id="form1" name="form1" method="post"> </form>
  
  <table width="608" border="1">
    <tbody>
      <tr>
        <td colspan="8" align="center">Edicion de Productos</td>
      </tr>
      <tr>
        <td width="18" bgcolor="#1AE93F">ID</td>
        <td width="127" bgcolor="#0CE978">IMAGEN</td>
        <td width="71" bgcolor="#0CE978">NOMBRE</td>
        <td width="104" bgcolor="#0CE978">CATEGORIA</td>
        <td width="65" bgcolor="#0CE978">PRECIO</td>
        <td width="56" bgcolor="#0CE978">STOCK</td>
        <td width="60" bgcolor="#0CE978">FECHA</td>
        <td width="73" bgcolor="#0CE978">EDITAR</td>
      </tr>  

<?php
	
	if(isset($db_connection)){ 	$consulta=mysqli_query($db_connection,"SELECT * FROM productos");
		while ($filas=mysqli_fetch_array($consulta)) {
			$id=$filas['id'];
			$imagen=$filas['imagen'];
			$nombre=$filas['nombre'];
			$desc=$filas['descripcion'];
			$precio=$filas['precio'];
			$stock=$filas['stock'];
			$fecha=$filas['fecha'];

			
?>

      
      <tr>
        <td><?php echo $id ?></td>
        <td><img src="<?php echo $imagen; ?>" width="120" height="120"><br></td>
        <td><?php echo $nombre ?></td>
        <td><?php echo $desc ?></td>
        <td><?php echo $precio ?></td>
        <td><?php echo $stock ?></td>
        <td><?php echo $fecha ?></td>
        <td>
        <form action="editar.php" method="post" name="compra">
			<input name="id2" type="hidden" value="<?php echo $id ?>"/>
			<input name="imagen2" type="hidden" value="<?php echo $imagen ?>"/>
			<input name="nombre2" type="hidden" value="<?php echo $nombre ?>"/>
			<input name="desc2" type="hidden" value="<?php echo $desc ?>"/>
			<input name="precio2" type="hidden" value="<?php echo $precio ?>"/>
			<input name="stock2" type="hidden" value="<?php echo $stock ?>"/>
			<input name="fecha2" type="hidden" value="<?php echo $fecha ?>"/>
			<input name="editar" type="submit" value="editar"/>
        </form>
        
        
        <form action="borrar.php"
 method="post">
 	<input type="hidden" value="<?php echo $id ?>">
 	<input type="submit" name="" value="Borrar">
 </form>        
        </td>
      </tr>
      </tr>
      <p>
      <?php } 
}?>        
		</tbody>
</table>
	  
<?php } ?>
