<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Pedidos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                    
                    echo "<tr>";
                    echo "<td>$id_pedido</td>";
                    echo "<td>$nompedido</td>";
                    echo "<td>$domiciliopedido</td>";
                    echo "<td>$totalpiezas</td>";
                    echo "<td>$servicios</td>";
                    echo "<td>
                            <a href='eliminar_pedidos.php?id=$id_pedido' class='btn btn-danger'>Eliminar</a>
                            <a href='editar_pedidos.php?id=$id_pedido' class='btn btn-primary'>Editar</a>
                          </td>";
                    echo "</tr>";
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
