<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registro</title>
  <link rel="shortcut icon" href="img/icon.png">
  <link rel="stylesheet" href="css/regis_estilo2.css">
</head>
<body>
<div id="form">
      <form action="" method="post">
    <table align="center" id="tabla_reg">
    <tbody>
      <tr>
        <td colspan="2" align="center"><h2 style="color: #0000FF; margin:5px 0px;"><b>REGISTRO</b></h2></td>
        </tr>
      <tr>
        <td><label ><b>Nombre(s):</b></label>
        </td>
        <td><input id="input" type="text" name="realname" placeholder="Ingresa tu nombre" required /></td>
      </tr>
      <tr>
        <td>
        <label ><b>E-Mail:</b></label>
       </td>
        <td> <input id="input" type="text" name="nick" required placeholder="Ingresa tu email"/>
        </div></td>
      </tr>
      <tr>
        <td>
        <label ><b>Contraseña:</b></label>
        </td>
        <td><input id="input" type="password" name="pass" placeholder="Ingresa una contraseña" required />
        </td>
      </tr>
      <tr>
        <td>
        <label ><b>Re-Contraseña:</b></label>
       </td>
        <td> <input id="input" type="password" name="rpass" required placeholder="Repite tu contraseña" />
      </div></td>
      </tr>
    </tbody>
    </table>
    <br>
    <div class="sub2" align="center">
      <input type="submit" name="submit" id="boton" value="Registrarse"/>
    </div>
    
    <br><br>
    <div class="sub1" align="center">
      <input onclick="window.location.href='index.php'" type="button" name="boton" id="boton" value="Volver" />
    </div>
    
  </form>
</div>
<?php
    if(isset($_POST['submit'])){
      require("registro.php");
    }
  ?>
</body>
</html>
