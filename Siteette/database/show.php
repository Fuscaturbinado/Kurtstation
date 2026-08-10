<?php 
include_once ('database.php');
include_once('./static/post.css');

if($conect->connect_error){
    die("Fail to conecto to DB;". $conect ->connect_error);

}else{
    $sql= "SELECT id , post_title, subtitle, user_account FROM `post_users`;";
    $query= mysqli_query($conect, $sql);

    while ($row = $query -> fetch_assoc()) {
        $title = $row['post_title'];
        $text = $row['subtitle'];
        $user = $row['user_account'];
        echo "<section class = 'postbody'>";
        echo "<div class = 'post'>";
        echo "<div class = 'posiTitle'>";
        echo "<div class = 'titlePost'>$title</div>";
        echo "</div><br>";
        echo "<div class = 'posiText'>";
        echo "<div class = 'textPost'>$text</div>";
        echo "</div><br>";
        echo "<div class = 'posiDate'>";
        echo "<div class = 'datePost'>$date</div>";
        echo "</section>";
        echo "</div><br>";
        echo "</div><br>";
    }
}



