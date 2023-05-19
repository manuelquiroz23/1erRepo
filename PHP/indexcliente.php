<?php
session_start();
if(isset($_SESSION['ClienteuId'])) {
    $clienteuId = $_SESSION['ClienteuId'];
    $bienvenida = "Bienvenido, " . $clienteuId . "!";
} else {
    header("Location: ../header.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planchaduria Loma Linda</title>
    <link rel="stylesheet" href="CSS/clienteestilo.css">
</head>
<body>
    <header>
        <nav>
            <a href="#">
                <img src="Images/logo.jpeg" alt="logo">
            </a>
            <ul>
                <li><a href="verpedidoscliente.php">Mis pedidos</a></li>
                <li><a href="https://goo.gl/maps/VwwQf88H7ibsYzG46">Ubicacion</a></li>
            </ul>

            <form action="Includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Cerrar sesion</button>
            </form>
        </nav>
    </header>
    <main>
        <div class="mensaje">
            <?php echo $bienvenida; ?>
        </div>
        <style>
            .mensaje {
                text-align: center;
            }
            .form-column {
                display: inline-block;
                width: 30%;
                margin: 3px;
                vertical-align: top;
            }
            .center {
                text-align: center;
            }
            .mensaje {
                text-align: center;
            }
            .campo-error {
                border: 2px solid red;
            }
        </style>
        <div class="mensaje">
            </br>

        </div>
        <h1>Hacer Pedido</h1>
        </div>
        <div class="center">
            <form action="forms/editar_pedido.php" method="post">
                <div class="form-column">
                    <input type="text" id="nombre" hidden=true name="nombre" value="<?php echo $clienteuId; ?>" readonly><br>

                    <label for="domicilio">Domicilio:</label>
                    <input type="text" id="domicilio" name="domicilio"><br>

                    <label for="piezas">Número de piezas:</label>
                    <input type="number" id="piezas" name="piezas" onchange="calcularTotal()"><br>
                </div>

                <div class="form-column">
                    <label for="servicio">Servicio:</label>
                    <select id="servicio" name="servicio" onchange="calcularTotal()">
                        <option value="costureria">Costurería</option>
                        <option value="planchado">Planchado</option>
                    </select><br>

                    <label for="precio">Precio:</label>
                    <input type="text" id="precio" name="precio" readonly><br>
                    <label for="totalpagar">Total a pagar:</label>
                    <input type="text" id="totalpagar" name="totalpagar" readonly><br>
                </div>
                <div class="center">
                    <input type="submit" value="Confirmar Pedido">
                </div>
            </form>
        </div>
        <script>
            function calcularTotal() {
                // Obtener el precio del servicio seleccionado
                var costoPorDefecto = (document.getElementById("servicio").value === "planchado") ? 8 : 15;
                document.getElementById("precio").value = "$" + costoPorDefecto;

                // Calcular el total a pagar
                var piezas = document.getElementById("piezas").value;
                var total = piezas * costoPorDefecto;
                document.getElementById("totalpagar").value = "$" + total;
            }
           
            // Obtener las entradas de texto
            var nombreInput = document.getElementById("nombre");
            var piezasInput = document.getElementById("piezas");
            var domicilioInput = document.getElementById("domicilio");

            // Añadir evento de blur a las entradas de texto
            nombreInput.addEventListener("blur", validarCampo);
            piezasInput.addEventListener("blur", validarCampo);
            domicilioInput.addEventListener("blur", validarCampo);

            function validarCampo(evento) {
                var campo = evento.target;
                if (campo.value.trim() === "") {
                    // Si el valor está vacío, marcar el campo en rojo
                    campo.style.borderColor = "red";
                } else {
                    // Si el valor no está vacío, restaurar el color del borde al predeterminado
                    campo.style.borderColor = "";
                }
            }
        </script>
    </main>
</body>
</html>


