<?php

$servername = "localhost";
$dbUsername = "id20635539_planchadurialomalinda";
$dBPassword = "Z2z0P@sn-=?37S";
$dbName = "id20635539_dbplanchaduria";

$conn = mysqli_connect($servername,$dbUsername,$dBPassword,$dbName);

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}