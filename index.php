<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">  
  <link rel="stylesheet" href="css/ini_estilo.css">
  <title>LIBCOM</title>
  <link rel="shortcut icon" href="img/icon.png">
</head>
<body id="cuerpo_index">
  <section id=inises>
    <center><h2 style="color: #0000FF; ">INICIO DE SESIÓN</h2></center>
      <form action="validar.php" method="post">
        <table  align="center" class="login">
        <tbody>
        <tr>
          <td><strong>CORREO:</strong></td>
          <td><input id=input type="text" name="mail" required></td>
        </tr>
        <tr>
          <td><strong>CONTRASEÑA:</strong></td>
          <td><input id=input type="password" name="pass" required></td>
        </tr>
        <tr>
          <td colspan="2" ><input id="boton" type="submit" value="Aceptar" ></td>  
        </tr>
        </tbody>
        </table>
      </form>
    <div id="nocount">
      <p>¿Aún no tienes una cuenta?<br>Registrate ahora para ver todo nuestro contenido.</p>
      <input type="button" name="boton" id="boton" onclick="window.location.href='registro_form.php'" value="Registrarse" />
    </div>
  </section>
</body>
</html>

<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>

</body>
</html>