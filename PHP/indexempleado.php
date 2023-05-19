<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Pedidos</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <script>
        function confirmarEliminacion() {
            var respuesta = confirm("¿Está seguro de que desea eliminar el pedido?");
            if (respuesta == true) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<body>
    <header>
        <h1>Lista de Pedidos</h1>
        <form action="Includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Cerrar sesion</button>
        </form>
        
    </header>
    
    <main>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID Pedido</th>
                    <th>Cliente</th>
                    <th>Direccion</th>
                    <th>Total Piezas</th>
                    <th>Servicio</th>
                    <th>Estado</th>
                    <th>Total a pagar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Conexión a la base de datos
                include("Includes/dbh.inc.php");
                
                // Consulta a la base de datos
                $query = "SELECT * FROM pedidos";
                $result = mysqli_query($conn, $query);
                
                // Iterar sobre cada pedido
                while($fila = mysqli_fetch_array($result)) {
                    $id_pedido = $fila['Id_Pedido'];
                    $nompedido = $fila['NomPedido'];
                    $domiciliopedido = $fila['DomicilioPedido'];
                    $totalpiezas = $fila['NoDePiezas'];
                    $servicios = $fila['servicio'];
                    $status = $fila['status'];
                    $totalpagar = $fila['totalpagar'];
                    
                    echo "<tr>";
                    echo "<td>$id_pedido</td>";
                    echo "<td>$nompedido</td>";
                    echo "<td>$domiciliopedido</td>";
                    echo "<td>$totalpiezas</td>";
                    echo "<td>$servicios</td>";
                    echo "<td>$status</td>";
                    echo "<td>$totalpagar</td>";
                    echo "<td>
                        <a href='eliminar_pedidosempleado.php?id=$id_pedido' class='btn btn-danger' onclick='return confirmarEliminacion()'>Eliminar</a>
                        <a href='editar_pedidos.php?id=$id_pedido' class='btn btn-primary'>Editar</a>
                    </td>";
                }                
                ?>
            </tbody>
        </table>
    </main>
    
    <footer>
        <p>&copy; 2023 Planchaduria Loma Linda</p>
    </footer>
</body>
</html>
