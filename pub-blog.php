<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/stile.css">
</head>
<body>
	<!-- Cabeçalho -->
	<?php include 'cabecalho.php' ?>

	<!-- Área de Form -->
	<div class="cont">
		<article class="article" id="forms-pub">
			<form>
				<input type="tex" name="title" placeholder=" Titulo: "><br>
				<textarea name="txt" rows="5" cols="30" placeholder=" Texto..."></textarea><br>
				<input type="file" name="imagem"><br>
				<input type="button" name="pub" value="Publicar" id="button-pub">
			</form>
		</article>
	</div>
</body>
</html>