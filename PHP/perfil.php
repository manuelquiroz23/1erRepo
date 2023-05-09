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

var_dump($a);
?>
<h1>Modificar tus datos</h1>
<form id="datos" method="post" action="forms/editar_perfil.php">
    <div>
        <div>Nombre<span></span><input type="text" value="<?php echo $a['uIdClientes'];?>" name="nombre" /></div>
        <div>E-Mail<span></span><input type="email" value="<?php echo $a['CorreoCliente'];?>" name="email"/></div> 
        <div class="profile">
            <span>Tu perfil actual</span>
            <div><img src="PHP\Images\<?php echo $a['imagen'];?>" width="160" alt="Foto actual"/></div>
            <div class="image_actions">
                <input type="file" id="new_image" name="foto"/>
                <label for="new_image">Usar imagen nueva</label>

                <input type="checkbox" id="del_image" name="foto_eliminar"/>
                <label for="del_image">Eliminar foto actual</label>
            </div>
            <div><span>Actualizar Password</span><input type="password" name="clave"></div>
        </div>
    </div>
    <div><input class="aligned" type="submit" value="Guardar cambios" /></div>
</form>