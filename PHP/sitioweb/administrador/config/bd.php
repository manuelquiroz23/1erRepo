<?php
$host="localhost";
$bd="id20635539_dbplanchaduria";
$usuario="id20635539_planchadurialomalinda";
$contrasenia="Plaloli123!";

try {
    $conexion=new PDO("mysql:host=$host; dbname=$bd", $usuario, $contrasenia);
   


} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>