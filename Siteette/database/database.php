<?php 
$hostname = "127.0.0.1";
$username = "root";
$password = "33227809";
$databse = "test_db";
$port = 3306;

$conect= new mysqli($hostname, $username, $password, $databse, $port);

if(!conect){
    die ("Conexão falhou!". mysqli_connect_error());
}else{

    echo "conexão sucedida!";

}

?>