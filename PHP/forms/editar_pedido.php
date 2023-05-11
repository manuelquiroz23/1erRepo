<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$dbUsername = "root";
$dBPassword = "";
$dbName = "PlanchaduriaLomaLinda";

$conn = mysqli_connect($servername, $dbUsername, $dBPassword, $dbName);

// Verificar la conexión
if (!$conn) {
	die("Error de conexión: " . mysqli_connect_error());
}

// Obtener los datos del pedido del formulario
$nombre_completo = $_POST['nombre'];
$domicilio = $_POST['domicilio'];
$num_piezas = $_POST['piezas'];
$servicio = $_POST['servicio'];

// Insertar los datos del pedido en la tabla
$sql = "INSERT INTO pedidos (NomPedido, DomicilioPedido, NoDePiezas, servicio) VALUES ('$nombre_completo', '$domicilio', $num_piezas, '$servicio')";

if (mysqli_query($conn, $sql)) {
	// Obtener el ID generado automáticamente
	$id_pedido = mysqli_insert_id($conn);

	echo '<script>alert("Pedido realizado. El ID del pedido es '.$id_pedido.'."); window.location.href = "../indexcliente.php";</script>';

} else {
	echo '<script>alert("Error a confirmar el pedido."); window.location.href = "../indexcliente.php";</script>' . mysqli_error($conn);
}

mysqli_close($conn);
?>
