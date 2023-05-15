<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Pedido</title>
    <script>
      function calcularTotal() {
        var piezas = document.getElementById("piezas").value;
        var servicio = document.getElementById("servicio").value;
        var costo = (servicio === "planchado") ? 8 : 15;
        var total = piezas * costo;
        var totalPorServicio = piezas + " x $" + costo + " = $" + total;
        document.getElementById("totalpagar").value = total;
        document.getElementById("costo").innerText = "$" + costo;
        document.getElementById("totalporservicio").innerText = totalPorServicio;
      }

      function validarCampo(campo) {
        if (campo.value.trim() === "") {
          campo.style.borderColor = "red";
        } else {
          campo.style.borderColor = "";
        }
      }
    </script>
  </head>
  <body>
    <h1>Hacer Pedido</h1>
    <div id="precios">
        <p>Costo por pieza: <span id="costo"></span></p>
        <p>Total por servicio: <span id="totalporservicio"></span></p>
    </div>
    <form action="forms/editar_pedido.php" method="post">
      <label for="nombre">Nombre completo:</label>
      <input type="text" id="nombre" name="nombre" onblur="validarCampo(this)"><br>

      <label for="domicilio">Domicilio:</label>
      <input type="text" id="domicilio" name="domicilio" onblur="validarCampo(this)"><br>

      <label for="piezas">Número de piezas:</label>
      <input type="number" id="piezas" name="piezas" onchange="calcularTotal()" onblur="validarCampo(this)"><br>

      <label for="servicio">Servicio:</label>
      <select id="servicio" name="servicio" onchange="calcularTotal()">
        <option value="costureria">Costurería</option>
        <option value="planchado">Planchado</option>
      </select><br>

      <label for="totalpagar">Total a pagar:</label>
      <input type="text" id="totalpagar" name="totalpagar" readonly><br>

      <input type="submit" value="Confirmar Pedido">
    </form>

    <script>
      // Agregar precios por defecto
      var costoPorDefecto = (document.getElementById("servicio").value === "planchado") ? 8 : 15;
      document.getElementById("costo").innerText = "$" + costoPorDefecto;
      document.getElementById("totalporservicio").innerText = "0 x $" + costoPorDefecto + " = $0";
    </script>
  </body>
</html>
