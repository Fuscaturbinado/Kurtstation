<?php
$hostname="127.0.0.1";
$username="root";
$password="root";
$dbname="kurts_data";

$conect= new mysqli($hostname, $username, $password, $dbname);

if($conect->connect_error){

    die("Fail to connect to data base" . $connect->connect_error );

}else{

$Title= $conect -> real_escape_string($_POST['title']);
$Text= $conect -> real_escape_string($_POST['text']);

$sql= "INSERT INTO `posts` (`title`,`text`,`date`) VALUES ('".$Title."','".$Text."','".date("Y-m-d")."')";

$resultado= $conect-> query($sql);

    if($resultado === TRUE){

                echo "Created post";
                header("index.php");
                exit();

    }else{
                echo "Error to create post";
                header("index.php");
                exit();
        
    }
    
}
?>
