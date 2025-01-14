<?php 
include_once ('database.php');


if($conect->connect_error){
    die("Fail to conecto to DB;". $conect ->connect_error);

}else{
    $sql= "SELECT id , title, text, date FROM `posts`;";
    $query= mysqli_query($conect, $sql);

    while ($row = $query -> fetch_assoc()) {
        $title = $row['title'];
        $text = $row['text'];
        $date = $row['date'];
        echo "<div class ='post'>";
        echo "<div class ='posiTitle'>";
        echo "<div class = 'titlePost'>$title</div>";
        echo "</div><br>";
        echo "<div class ='posiText'>";
        echo "<div class = 'textPost'>$text</div>";
        echo "</div><br>";
        echo "<div class ='posiDate'>";
        echo "<div class = 'datePost'>$date</div>";
        echo "</div><br>";
        echo "</div><br>";
    }
}



