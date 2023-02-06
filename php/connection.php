<?php 
/*
conexão com o banco de dados
*/

$user = "miransoft";
$hostname = "localhost";
$database = "frangoecia";
$password = "&*J25tLpçfg";



$link = mysqli_connect($hostname,$user,$password,$database);

// check connection 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}



