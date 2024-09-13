<?php 
include_once ('database.php');


if($conect->connect_error){
    die("Fail to conecto to DB;". $conect ->connect_error);

}else{
    $sql= "SELECT id FROM `posts`;";
    $query= mysqli_query($conect, $sql);

    while ($row = $query -> fetch_assoc()) {
        $title = $row['title'];
        $text = $row['text'];
        $date = $row['date'];

        echo $title;
        
    }

    // $quant= mysqli_num_rows($query);
    // if($quant > 0){
    // $sql= "SELECT title, text FROM `posts`;";
    // print($quant);
    
    // $i=1;
    // for($i = 0 ; $i <$quant; $i++){

    //             echo "<div>$text</div>";
    //             print($quant);
    // }
    // }else{
        
    //         echo ("Fail to connect to sever");
        
    //     }
}



