<?php 
$hostname = "127.0.0.1";
$username = "kurtstation";
$password = "33227809@lr@LR";
$database = "test_db";
$port = 3306;

$conect= new mysqli($hostname, $username, $password, $database, $port);

if(!$conect){
    die ("Conexão falhou!". mysqli_connect_error());
}

?>