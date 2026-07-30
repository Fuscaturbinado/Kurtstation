<!DOCTYPE html>
<html lang="en">
<head>

    <?php include_once("database.php"); ?>
    <?php include_once("boot.php")?>
    <link rel="stylesheet" href="estilo.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Posts</title>

</head>
<body>

    <a class="backButton" href="index.php">Voltar</a>
    <form action="acao.php" method="POST" enctype="multipart/form-data">

    <label>Title</label>
    <input type="text" name="title" id="title" required>
    <label>Text</label>
    <input type="text" name="text" id="text" required>
    <!-- <input type="file" name="image" accept=".jpg , .jpeg, .png "> -->
    <button type="submit">UPLOAD</button>

</body>
</html>