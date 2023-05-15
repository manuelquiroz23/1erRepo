<?php 
session_start();

// Establecer la conexión a la base de datos
$servername = "localhost";
$dbUsername = "root";
$dBPassword = "";
$dbName = "PlanchaduriaLomaLinda";

$conn = mysqli_connect($servername,$dbUsername,$dBPassword,$dbName);

include('../Includes/dbh.inc.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);
$IdUsuario = $_SESSION['ClienteId'];

$c = <<<SQL
UPDATE
    clientes
SET
    uIdClientes=NULLIF( '$nombre' , '' ),
    CorreoCliente='$email',
    PasswordCliente='$clave'
WHERE Id_Cliente='$IdUsuario'
LIMIT 1
SQL;

mysqli_query($conn, $c);
header("Location: ../perfil.php?");
?> 
