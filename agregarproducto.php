<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Agregar Producto</title>
  <link rel="stylesheet" href="css/stock_estilo.css">
  <link rel="shortcut icon" href="img/icon.png">
</head>

<body>
<form action="recibirproducto.php" method="post" id="agregar" enctype="multipart/form-data">
  <table height="330" border="1" align="center">
    <tbody>
      <tr>
        <td colspan="2" align="center"><h3><strong>INGRESE UN PRODUCTO A STOCK</strong></h3></td>
      </tr>
      <tr>
        <td class="detalle">Imagen:</td>
        <td width="225"><label for="imagen"></label>
        <input type="file" name="imagen" id="imagen" required></td>
      </tr>
      <tr>
        <td class="detalle">Título:</td>
        <td><label for="nombre">
          <input type="text" name="nombre" id="nombre" required>
        </label></td>
      </tr>
      <tr>
        <td class="detalle">Autor:</td>
        <td><label for="autor">
          <input type="text" name="autor" id="autor" required>
        </label></td>
      </tr>
      <tr>
        <td height="85" class="detalle">Descripción:</td>
        <td><label for="descripcion">
          <input type="text" name="descripcion" id="descripcion">
        </label></td>
      </tr>
      <tr>
        <td class="detalle">Precio:</td>
        <td><label for="precio">
          <input type="number" name="precio" id="precio" min="1" step="0.01" required>
        </label></td>
      </tr>
      <tr>
        <td class="detalle">Editorial:</td>
        <td><label for="editorial">
          <input type="text" name="editorial" id="editorial">
        </label></td>
      </tr>
      <tr>
        <td class="detalle">Stock:</td>
        <td><label for="stock">
          <input type="number" name="stock" id="stock" min="1" required>
        </label></td>
      </tr>
      <tr>
        <td class="detalle">Fecha:</td>
        <td><label for="fecha">
          <input type="text" name="fecha" id="fecha" value="<?php echo date("y-m-d");?>">
        </label></td>
      </tr>
      <tr>
        <td class="botones" colspan="2" align="center">
          <input type="submit" name="submit" id="submit" value="Enviar">
          <input type="button" onclick="window.location.href='admin.php'" name="boton" id="boton" value="Cancelar"></td>
      </tr>
    </tbody>
  </table>

  <figure>
    <img align="center" src="img/add_book.jpg" alt="Agregando un nuevo libro" id="figura">
  </figure>
</form>
</body>
</html>