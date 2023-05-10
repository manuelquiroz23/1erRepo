<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Pedido</title>
  </head>
  <body>
    <h1>Hacer Pedido</h1>
    <form action="forms/editar_pedido.php" method="post">
      <label for="nombre">Nombre completo:</label>
      <input type="text" id="nombre" name="nombre"><br>

      <label for="domicilio">Domicilio:</label>
      <input type="text" id="domicilio" name="domicilio"><br>

      <label for="piezas">Número de piezas:</label>
      <input type="number" id="piezas" name="piezas"><br>

      <label for="servicio">Servicio:</label>
      <select id="servicio" name="servicio">
        <option value="costureria">Costurería</option>
        <option value="planchado">Planchado</option>
      </select><br>

      <input type="submit" value="Confirmar Pedido">
    </form>
  </body>
</html>
