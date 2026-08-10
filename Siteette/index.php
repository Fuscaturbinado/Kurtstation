<!DOCTYPE html>
<html rel="stylesheet" lang="en">
<head>
    <link rel="icon" type="image/png" href="/img/K.png">

<style>
@import url('https://fonts.googleapis.com/css2?family=Playwrite+BE+VLG:wght@100..400&display=swap');
</style>

            <meta charset="UTF-8">
            <link rel = "stylesheet" type = "text/css" href = /static/estilo.css  >
            <link rel="stylesheet" href="post.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <iconv href="/static/K.png">
            <title>Kunst Station</title>
            <script src="functions.js" defer></script>
            
</head>

<body class="theme">
<nav>
    <ul>
        <div class="titulop">
                    <label class="h1d">Kunst</label>
                    <label class="subtitulo" >Station</label>
        </div>

        <li class="dropdown">
                    <a href="#">About the Site</a>
                    <div class="dropdown-menu">
                    <a href="#">Criador</a>
                    <a href="#">Propósito</a>
                    <a href="#">sei lá</a>
            </div>
        </li>

        <li class="dropdown">
                    <a href="#">Arts</a>
                    <div class="dropdown-menu">
                    <a href="#">test</a>
                    <a href="#">test1</a>
                    <a href="#">test2</a>
                    </div>
        </li>

        <li class="dropdown">
                    <a href="#">Acounts</a>
                    <div class="dropdown-menu">
                    <a href="#">test</a>
                    <a href="#">test1</a>
                    <a href="#">test2</a>
                    </div>
        </li>

        <li class="dropdown">
                    <a href="#">Videos trailers</a>
                    <div class="dropdown-menu">
                    <a href="#">test</a>
                    <a href="#">test1</a>

                    </div>
        </li>
        <li><a class="CreatePost" href="postcreate.php">+Post</a></li>    
        
    
    </ul>
</nav>

       <?php include_once('database/show.php'); ?>


</body>
</html>
