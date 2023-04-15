<?php

$servername = "localhost";
$dbUsername = "root";
$dBPassword = "";
$dbName = "PlanchaduriaLomaLinda";

$conn = mysqli_connect($servername,$dbUsername,$dBPassword,$dbName);

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}