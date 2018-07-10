<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Agregar Usuario</title>
  <link rel="stylesheet" href="css/adduser_estilo.css">
  <link rel="shortcut icon" href="img/icon.png">
</head>

<body>
<form action="recibirusuario.php" method="post" id="agregar" enctype="multipart/form-data">
  <table width="390" height="330" border="1">
    <tbody>
      <tr>
        <th colspan="2" align="center"><h3><strong>INGRESE UN NUEVO USUARIO</strong></h3></th>
      </tr>
      <tr>
        <td class="detalles">Usuario:</td>
        <td id="input"><label for="usuario">
          <input type="text" name="usuario" id="usuario" required />
        </label></td>
      </tr>
      <tr>
        <td class="detalles">Contraseña:</td>
        <td id="input"><label for="password">
          <input type="password" name="password" id="password" required />
        </label></td>
      </tr>
      <tr>
        <td class="detalles">Email:</td>
        <td id="input"><label for="email">
          <input type="email" name="email" id="email" required />
        </label></td>
      </tr>
      <tr>
        <td class="detalles">KeyAdmin:</td>
        <td id="input"><label for="pasadmin">
          <input type="password" name="pasadmin" id="pasadmin" />
        </label></td>
      </tr>
      <tr>
        <td class="detalles">Rol:</td>
        <td id="input"><label for="rol">
          <input type="number" name="rol" id="rol" min="1" max="2" required />
        </label></td>
      </tr>
      <tr>
        <td class="botones" colspan="2" align="center">
          <input type="submit" name="submit" id="submit" value="Agregar" >
          <input type="button" onclick="window.location.href='admin.php'" name="boton" id="boton" value="Cancelar"></td>
      </tr>
    </tbody>
  </table>
  <figure >
    <img align="center" src="img/agrega-usuario.png" alt="Agregando un nuevo libro" id="figura">
  </figure>
</form>
</body>
</html>