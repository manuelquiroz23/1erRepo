<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$dbUsername = "id20635539_planchadurialomalinda";
$dBPassword = "Plaloli123!";
$dbName = "id20635539_dbplanchaduria";

$conn = mysqli_connect($servername,$dbUsername,$dBPassword,$dbName);

if (!$conn) {
  die("Error de conexión: " . mysqli_connect_error());
}

if(isset($_POST['submit'])) {
  // Obtener los datos del formulario
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $password = $_POST['password'];

  // Insertar los datos en la base de datos
  $query = "INSERT INTO clientes (uIdClientes, CorreoCliente, PasswordCliente) VALUES ('$nombre', '$correo', '$password')";
  $result = mysqli_query($conn, $query);

  if($result) {
    echo "Cliente agregado exitosamente";
  } else {
    echo "Error al agregar cliente: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Agregar cliente</title>
  <link rel="stylesheet" type="text/css" href="CSS/designagregarclientes.css">
</head>
<body>
  <h1>Agregar nuevo cliente</h1>
  <form method="post">
    <label for="nombre">Nombre de usuario:</label>
    <input type="text" id="nombre" name="nombre"><br><br>
    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo"><br><br>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" name="submit" value="Agregar cliente">
  </form>
  <a href="verclientesadmin.php">Regresar</a>
</body>
</html>
