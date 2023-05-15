<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mis pedidos</title>
</head>
<body>
	<h1>Mis pedidos</h1>
	<a href="indexcliente.php">Regresar</a>

	<?php
	// Iniciar la sesión para obtener el nombre de usuario del usuario que inició sesión
	session_start();

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

	// Obtener el nombre de usuario actual de la sesión
	$usuario_actual = $_SESSION['ClienteuId'];

	// Obtener los pedidos del usuario actual
	$sql = "SELECT * FROM pedidos WHERE NomPedido = '$usuario_actual'";
	$resultado = mysqli_query($conn, $sql);

	if ($resultado && mysqli_num_rows($resultado) > 0) {
		// Mostrar los pedidos en una tabla
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
