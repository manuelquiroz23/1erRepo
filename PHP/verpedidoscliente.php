<?php
session_start();
$servername = "localhost";
$dbUsername = "id20635539_planchadurialomalinda";
$dBPassword = "Plaloli123!";
$dbName = "id20635539_dbplanchaduria";

$conn = mysqli_connect($servername, $dbUsername, $dBPassword, $dbName);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

$usuario_actual = $_SESSION['ClienteuId'];

$sql = "SELECT * FROM pedidos WHERE NomPedido = '$usuario_actual'";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mis pedidos</title>
    <link rel="stylesheet" href="CSS/designpedidoscliente.css">
</head>
<body>
    <h1>Mis pedidos</h1>
    <a href="indexcliente.php">Regresar</a>

    <?php
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        echo '<table>';
        echo '<tr><th>ID</th><th>Nombre</th><th>Domicilio</th><th>No. de piezas</th><th>Servicio</th><th>Total</th><th>Estado</th></tr>';

        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo '<tr>';
            echo '<td>' . $fila['Id_Pedido'] . '</td>';
            echo '<td>' . $fila['NomPedido'] . '</td>';
            echo '<td>' . $fila['DomicilioPedido'] . '</td>';
            echo '<td>' . $fila['NoDePiezas'] . '</td>';
            echo '<td>' . $fila['servicio'] . '</td>';
            echo '<td>' . $fila['totalpagar'] . '</td>';
            echo '<td>' . $fila['status'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';

    } else {
        echo 'No se encontraron pedidos.';
    }

    mysqli_close($conn);
    ?>
</body>
</html>

