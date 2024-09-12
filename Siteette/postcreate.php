<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("database.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<title>Upload de imagens com PHP</title>
		<meta charset="utf-8"/>
</head>
<body>
	<form action="gravar.php" method="POST" enctype="multipart/form-data">
		<label for="imagem">Imagem:</label>
		<input type="file" name="imagem"/>
		<br/>
		<input type="submit" value="Enviar"/>
	</form>

<form action="acao.php">
    <p>Titulo</p>
    <input type="text" name="Titulo">
    <P>Subtexto</P>
    <input type="text" name="sutext">
    <input type="submit">
</form>

</body>
</html>