<?php 
$hostname="127.0.0.1";
$username="root";
$password="";
$dbname="kurts_data";

$sql= mysqli_connect ($hostname, $username, $password, $dbname);
?>

<!DOCTYPE html>
<html rel="stylesheet" lang="en">
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Playwrite+BE+VLG:wght@100..400&display=swap');
</style>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Own Site</title>
    <script src="functions.js" defer></script>
    
</head>

<body class="theme">
<nav>
    <ul>
        <div class="titulop">
        <label class="h1d">Kunst</label>
        <label class="subtitulo" >station</label>
        </div>
        <li class="dropdown">
            <a href="#">About the Site</a>
            <div class="dropdown-menu">
            <a href="#">Criador</a>
            <a href="#">Propósito</a>
            <a href="#">sei lá</a>
            </div>
        </li><li class="dropdown">
            <a href="#">Arts</a>
            <div class="dropdown-menu">
                 <a href="#">test</a>
                 <a href="#">test1</a>
                 <a href="#">test2</a>
            </div>
        </li><li class="dropdown">
            <a href="#">Acounts</a>
            <div class="dropdown-menu">
            <a href="#">test</a>
            <a href="#">test1</a>
            <a href="#">test2</a>
            </div>
        </li><li class="dropdown">
            <a href="#">Videos trailers</a>
            <div class="dropdown-menu">
            <a href="#">test</a>
            <a href="#">test1</a>
            <a href="#">test2</a>
            <a href="#">test</a>
            <a href="#">test1</a>
            <a href="#">test2</a>

            </div>
        </li>
    </ul>
</nav>
<div class="post">
<?php 
if(!$sql) {

    die ("fail to connect" . mysqli_connect_error());
}else{
    $query= "SELECT id FROM post";
    $result= mysqli_query($sql,$query);
    if(mysqli_num_rows($result)> 0){
    
}else{
    echo"Nothing in database";
}
}
?>


</div>


</body>
</html>