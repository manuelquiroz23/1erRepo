<?php
session_start();

// Establecer la conexión a la base de datos
$servername = "localhost";
$dbUsername = "root";
$dBPassword = "";
$dbName = "PlanchaduriaLomaLinda";

$conn = mysqli_connect($servername,$dbUsername,$dBPassword,$dbName);


$cDatos = "SELECT * FROM clientes WHERE Id_Cliente = '$_SESSION[ClienteId]' LIMIT 1";
$fDatos = mysqli_query($conn, $cDatos);
$a = mysqli_fetch_assoc($fDatos);

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/perfilestilo.css">
</head>
<h1>Modificar tus datos</h1>
<form id="datos" method="post" action="forms/editar_perfil.php">
    <div>
        <div>Nombre<span></span><input type="text" value="<?php echo $a['uIdClientes'];?>" name="nombre" /></div>
        <div>E-Mail<span></span><input type="email" value="<?php echo $a['CorreoCliente'];?>" name="email"/></div> 
        <div class="profile">
            <div><span>Actualizar Password</span><input type="password" name="clave"></div>
        </div>
    </div>
    <div><input class="aligned" type="submit" value="Guardar cambios" /></div>
    <a href="indexcliente.php">Regresar</a>
</form>