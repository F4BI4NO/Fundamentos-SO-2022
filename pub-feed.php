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

	<div class="cont">
		<article class="article" id="forms-pub">
			<form>
				<input type="tex" name="sexo" placeholder=" Sexo: " class="lad">
				<input type="tex" name="idade" placeholder=" Idade: " class="lad"><br/>
				<input type="tex" name="raca" placeholder=" Raça: " class="lad">
				<input type="tex" name="Contato" placeholder=" Contato: " class="lad"><br/>
				<textarea name="txt" rows="5" cols="30" placeholder=" Texto..." id="txta-feed"></textarea><br>
				<input type="file" name="imagem" id="ft"><br>
				<input type="button" name="pub" value="Publicar" id="button-pub">
			</form>
		</article>
	</div>
</body>
</html>