<?php 
include_once ('database.php');

if($conect->connect_error){
    die("Fail to conecto to DB;". $conect ->connect_error );

}else{
    $sql= "SELECT id , post_title, subtitle, user_account FROM `post_user`;";
    $query= mysqli_query($conect, $sql);

    while ($row = $query -> fetch_assoc()) {
        $title = $row['post_title'];
        $text = $row['subtitle'];
        $user = $row['user_account'];
        
    }
}



