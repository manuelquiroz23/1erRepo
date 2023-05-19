<?php
session_start();


// Establecer la conexión a la base de datos
$servername = "localhost";
$dbUsername = "id20635539_planchadurialomalinda";
$dBPassword = "Plaloli123!";
$dbName = "id20635539_dbplanchaduria";

$conn = mysqli_connect($servername,$dbUsername,$dBPassword,$dbName);

// Obtener la lista de clientes de la base de datos
$cClientes = "SELECT * FROM clientes";
$fClientes = mysqli_query($conn, $cClientes);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Administración de clientes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/desginverclientes.css">
</head>
<body>
	<head>
		<title>Administración de clientes</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/desginverclientes.css">
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
	</head>


	<main>
		<h2>Lista de clientes</h2>
		<a href="sitioweb/administrador/inicio.php">Regresar</a>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre de usuario</th>
					<th>Correo electrónico</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php while($fila = mysqli_fetch_assoc($fClientes)) { ?>
				<tr>
					<td><?php echo $fila['Id_Cliente']; ?></td>
					<td><?php echo $fila['uIdClientes']; ?></td>
					<td><?php echo $fila['CorreoCliente']; ?></td>
					<td>
						<a href="eliminarclientesadmin.php?id=<?php echo $fila['Id_Cliente']; ?>" onclick="return confirmarEliminacion();">Eliminar</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<a href="agregar_cliente.php">Agregar nuevo cliente</a>
	</main>
</body>
</html>
