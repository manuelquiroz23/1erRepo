<?php
// Conexión a la base de datos
include("Includes/dbh.inc.php");

// Obtener el ID del pedido a editar
$id_pedido = $_GET['id'];

// Obtener los datos del pedido de la base de datos
$query = "SELECT * FROM pedidos WHERE Id_Pedido = $id_pedido";
$result = mysqli_query($conn, $query);
$fila = mysqli_fetch_array($result);
$nompedido = $fila['NomPedido'];
$domiciliopedido = $fila['DomicilioPedido'];
$servicios = $fila['servicio'];
$totalpagar = $fila['totalpagar'];
// Verificar si se envió el formulario para actualizar el pedido
if(isset($_POST['actualizar'])) {
    $nompedido = $_POST['nompedido'];
    $domiciliopedido = $_POST['domiciliopedido'];
    $servicios = $_POST['servicios'];
    $status = $_POST['status'];
    $id_pedido = $_POST['id_pedido'];
    $totalpagar = $_POST['totalpagar'];
    // Actualizar el pedido en la base de datos
    $query = "UPDATE pedidos SET NomPedido = '$nompedido', DomicilioPedido = '$domiciliopedido', servicio = '$servicios', status = '$status', totalpagar = '$totalpagar' WHERE Id_Pedido = $id_pedido";
    mysqli_query($conn, $query);
    
    // Redirigir a la lista de pedidos
    header("Location: indexempleado.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Pedido</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <header>
        <h1>Editar Pedido</h1>
    </header>
    
    <main>
        <form method="POST">
            <div class="form-group">
                <label for="nompedido">Cliente:</label>
                <input type="text" class="form-control" id="nompedido" name="nompedido" value="<?php echo $nompedido; ?>">
            </div>
            <div class="form-group">
                <label for="domiciliopedido">Domicilio:</label>
                <input type="text" class="form-control" id="domiciliopedido" name="domiciliopedido" value="<?php echo $domiciliopedido; ?>">
            </div>
            <div class="form-group">
                <label for="servicios">Servicios:</label>
                <input type="text" class="form-control" id="servicios" name="servicios" value="<?php echo $servicios; ?>">
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status">
                    <option value="Aceptado">Aceptado</option>
                    <option value="Realizanose">En proceso</option>
                    <option value="Terminado">Terminado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="totalpagar">Total a Pagar:</label>
                <input type="text" class="form-control" id="totalpagar" name="totalpagar" value="<?php echo $totalpagar; ?>">
            </div>
            <input type="hidden" name="id_pedido" value="<?php echo $id_pedido; ?>">

            <button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>
        </form>
    </main>
    
    <footer>
        <p>&copy; 2023 Planchaduria Loma Linda</p>
    </footer>
</body>
</html>
