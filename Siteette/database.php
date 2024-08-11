
<?php 
$hostname="localhost";
$username="root";
$password="root";
$dbname="kurts_data";

$sql= mysqli_connect ($hostname,$username, $password, $dbname) ;

if(!$sql) {

    die ("fail to connect" . mysqli_connect_error());
}else{
    echo"It's work";
}
?>