<script>
    function confirmarEliminacion() {
        var respuesta = confirm("¿Está seguro de que desea eliminar al cliente?");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }
    }
</script>
<?php
// Conexión a la base de datos
include("Includes/dbh.inc.php");

// Obtener el ID del pedido a eliminar
$id_pedido = $_GET['id'];

// Eliminar el pedido de la base de datos
$query = "DELETE FROM clientes WHERE Id_Cliente = $id_pedido";
mysqli_query($conn, $query);

// Redirigir a la lista de pedidos
header("Location: verclientesadmin.php");
exit();
?>
