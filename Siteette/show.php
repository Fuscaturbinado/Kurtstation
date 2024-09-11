<?php 
include_once ('database.php');


if($conect->connect_error){
    die("Fail to conecto to DB;". $conect ->connect_error);

}else{
    $sql= "SELECT title, text FROM `posts`;";
    $query= mysqli_query($conect, $sql);
    $quant= mysqli_num_rows($query);
    print($quant);
    $text = query(text);
    $i=1;
    for($i = 0 ; $i<$quant; $i++){
        echo "<div>$<div>";
    }
}



?>