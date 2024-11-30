<!DOCTYPE html>
<html rel="stylesheet" lang="en">
<head>
    
<style>
@import url('https://fonts.googleapis.com/css2?family=Playwrite+BE+VLG:wght@100..400&display=swap');
</style>

            <meta charset="UTF-8">
            <link rel="stylesheet" href="estilo.css">
            <link rel="stylesheet" href="post.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Own Site</title>
            <script src="functions.js" defer></script>
            <?php include_once('database.php');?>
            <?php include_once('boot.php');?>
            
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
                    <a href="#">test2</a>
                    <a href="#">test</a>
                    <a href="#">test1</a>
                    <a href="#">test2</a>

                    </div>
        </li>
    </ul>
</nav>

        <?php include_once('show.php');?>


</body>
</html>