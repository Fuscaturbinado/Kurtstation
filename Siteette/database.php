
<?php 
$hostname="127.0.0.1";
$username="root";
$password="root";
$dbname="kurts_data";

$conect= new mysqli($hostname, $username, $password, $dbname);

if($conect->connect_error){

    die("Fail to connect to data base" . $connect->connect_error );

}else{

    


} 

?>