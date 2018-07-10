<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Confirmar Pedido</title>
  <link rel="shortcut icon" href="img/icon.png">
  <link rel="stylesheet" href="css/confirma_pedido_estilo.css">
</head>

<body>
  <header>
    <h2><strong>CONFIRMAR PEDIDO</strong></h2>
  </header>

<table width="329" border="0">
  <tbody>
    <tr>
      <th colspan="4" align="center">LISTADO DE SUS COMPRAS</th>
    </tr>
    <tr>
      <th wihth="85">PRODUCTO</th>
      <th wihth="56">PRECIO</th>
      <th wihth="81">CANTIDAD</th>
      <th >SUBTOTAL</th>
    </tr>
    <?php
	  session_start();
	  $mi_carrito=$_SESSION['carrito'];
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
      <td width="32"><?php echo $subtotal ?></td>

    </tr>
    <?php
			  }
	   	}
	     
    }
	?> 
    
    <tr>
      <td colspan="2">&nbsp;</td>

      <td>TOTAL:</td>
      <td ><?php if(isset($total)) echo $total ?></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      
      <td colspan="2"><form id="cp" name="cp" method="post" action="finalizarpedido.php"><input type="submit" name="confirmarpedido" id="confirmarpedido" value="Comprar"></form></td>
    </tr>
  </tbody> 
</table>
<p><input onclick="window.location.href='carrito.php'" type="button" name="boton" id="boton" value="Volver" /></p>
</body>
</html>