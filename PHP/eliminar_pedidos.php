<?php
// Conexión a la base de datos
include("Includes/dbh.inc.php");

// Obtener el ID del pedido a eliminar
$id_pedido = $_GET['id'];

// Eliminar el pedido de la base de datos
$query = "DELETE FROM pedidos WHERE Id_Pedido = $id_pedido";
mysqli_query($conn, $query);

// Redirigir a la lista de pedidos
header("Location: indexempleado.php");
exit();
?>
