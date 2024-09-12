<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("database.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="acao.php" method="POST" enctype="multipart/form-data">
<label>Title</label>
<input type="text" name="title" id="title" required>
<label>Text</label>
<input type="text" name="text" id="text" required>
<!-- <input type="file" name="image" accept=".jpg , .jpeg, .png "> -->
<button type="submit">UPLOAD</button>

<form action="acao.php">
    <p>Titulo</p>
    <input type="text" name="Titulo">
    <P>Subtexto</P>
    <input type="text" name="sutext">
    <input type="submit">
</form>

</body>
</html>