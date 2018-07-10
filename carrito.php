<?php include('conexion.php');?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>CARRITO</title>
	<link rel="shortcut icon" href="img/carrito.jpg">
	<link rel="stylesheet" href="css/carrito_estilo.css">
</head>

<body>

	<h2><strong>CARRITO DE COMPRAS</strong></h2>
	<figure>
    	<img src="img/carrito.jpg" alt="Carrito de Compras" align="center" id="figura">
    </figure>

	<p>Sus compras hasta el momento son:</p>	
     
<?php 
	if(isset($_POST['id_txt'])){
		$id=$_POST['id_txt'];
		$nombre=$_POST['nombre'];
		$precio=$_POST['precio'];
		$cantidad=$_POST['cantidad'];	$mi_carrito[]=array('id'=>$id,'nombre'=>$nombre,'precio'=>$precio,'cantidad'=>$cantidad);
		
}
	
session_start();

	if(isset($_SESSION['carrito'])){
		$mi_carrito=$_SESSION['carrito'];
		if(isset($_POST['id_txt'])){
			$id=$_POST['id_txt'];
			$nombre=$_POST['nombre'];
			$precio=$_POST['precio'];
			$cantidad=$_POST['cantidad'];
			$pos=-1;
			for($i=0;$i<count($mi_carrito);$i++){
				if($id==$mi_carrito[$i]['id']){
					$pos=$i;
				}
			}
		     if($pos<>-1){
				$cuanto = $mi_carrito[$pos]['cantidad']+$cantidad; $mi_carrito[$pos]=array('id'=>$id,'nombre'=>$nombre,'precio'=>$precio,'cantidad'=>$cuanto);
				 
			 }else{
				 $mi_carrito[]=array('id'=>$id,'nombre'=>$nombre,'precio'=>$precio,'cantidad'=>$cantidad);
			 }	
		}
}
if(isset($_POST['id3'])){
	$indice=$_POST['id3'];
	$mi_carrito[$indice]=NULL;
}	

if(isset($mi_carrito)) $_SESSION['carrito']=$mi_carrito;
	
?>
<table width="265" border="0">
  <tbody>
    <tr>
      <th colspan="5" ><b>LISTADO DE SUS COMPRAS</b></th>
    </tr>
    <tr>
      <th width="50">PRODUCTO</th>
      <th width="30">PRECIO</th>
      <th width="30">CANTIDAD</th>
      <th width="82">SUBTOTAL</th>
      <th width="30">ELIMINAR</th>
    </tr>
    <?php
	  if(isset($mi_carrito)){
		  $total=0;
		  for($i=0;$i<count($mi_carrito);$i++){
			  if($mi_carrito[$i]<>NULL){
				   
	?>
  
    <tr>
      <td><?php echo $mi_carrito[$i]['nombre']; ?></td>
      <td><?php echo $mi_carrito[$i]['precio']; ?></td>
      <td><?php echo $mi_carrito[$i]['cantidad']; ?></td>
      <?php 				  		$subtotal=$mi_carrito[$i]['precio']*$mi_carrito[$i]['cantidad'] ;
	  $total=$total+$subtotal;	   
	   ?>
      <td><?php echo $subtotal ?></td>
      <td><form action="" method="post"><input name="id3" type="hidden" value="<?php echo $i ?>"><input type="image" src="img/eliminar2.png">
      </form></td>
    </tr>
    <?php
			  }
	   	}
	     
    }
	?> 
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>TOTAL:</td>
      <td><?php if(isset($total)) echo $total ?></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
      <td colspan="2"><form id="cp" name="cp" method="post" action="confirmarpedido.php       "><input type="submit" name="confirmarpedido" id="confirmarpedido" value="Confirmar Pedido"></form></td>
    </tr>
  </tbody>
</table>
<p><input onclick="window.location.href='index2.php'" type="button" name="boton" id="boton" value="Volver" /></p>
</body>
</html>
