<?php
$servername = "localhost";
$dbUsername = "id20635539_planchadurialomalinda";
$dBPassword = "Plaloli123!";
$dbName = "id20635539_dbplanchaduria";

$conn = mysqli_connect($servername,$dbUsername,$dBPassword,$dbName);

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}