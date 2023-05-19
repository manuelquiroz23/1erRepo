<?php

// Establecer la conexión a la base de datos
$servername = "localhost";
$dbUsername = "id20635539_planchadurialomalinda";
$dBPassword = "Plaloli123!";
$dbName = "id20635539_dbplanchaduria";

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
$status = $_POST['status'];


// Calcular el total a pagar
if ($servicio == "planchado") {
	$total_a_pagar = $num_piezas * 8;
} else {
	$total_a_pagar = $num_piezas * 15;
}

// Verificar que el número de piezas esté dentro del rango permitido
if ($num_piezas > 0 && $num_piezas < 100) {

	// Insertar los datos del pedido en la tabla
	$sql = "INSERT INTO pedidos (NomPedido, DomicilioPedido, NoDePiezas, servicio, totalpagar, status) VALUES ('$nombre_completo', '$domicilio', $num_piezas, '$servicio', '$total_a_pagar','$status')";

	if (mysqli_query($conn, $sql)) {
		// Obtener el ID generado automáticamente
		$id_pedido = mysqli_insert_id($conn);

		echo '<script>alert("Pedido realizado. El ID del pedido es '.$id_pedido.'."); window.location.href = "../indexcliente.php";</script>';

	} else {
		echo '<script>alert("Error a confirmar el pedido."); window.location.href = "../indexcliente.php";</script>' . mysqli_error($conn);
	}
} else {
	echo '<script>alert("El número de piezas debe estar entre 1 y 99."); window.location.href = "../indexcliente.php";</script>';
}

mysqli_close($conn);
?>
