<?php
session_start();


// Establecer la conexión a la base de datos
$servername = "localhost";
$dbUsername = "root";
$dBPassword = "";
$dbName = "PlanchaduriaLomaLinda";

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
	<header>
		<h1>Administración de clientes</h1>
		<nav>
			<ul>
				<li><a href="sitioweb/administrador/seccion/productos.php">Productos</a></li>
				<li><a href="pedidosadmin.php">Pedidos</a></li>
				<a class="nav-item nav-link" href="sitioweb/administrador/inicio.php">Volver</a>
				<li><a href="header.php">Cerrar sesión</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<h2>Lista de clientes</h2>
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
						<a href="editarperfiladmin.php?id=<?php echo $fila['Id_Cliente']; ?>">Editar</a>
						<a href="eliminarclientesadmin.php?id=<?php echo $fila['Id_Cliente']; ?>">Eliminar</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<a href="agregar_cliente.php">Agregar nuevo cliente</a>
	</main>
</body>
</html>
