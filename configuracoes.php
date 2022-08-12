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
				<input type="tex" name="nome" placeholder=" Nome: " class="lad">
				<input type="tex" name="cidade" placeholder=" Cidade: " class="lad"><br/>
				<input type="email" name="email" placeholder=" E-mail: " class="cx-grande"><br/>
				<input type="tex" name="telefone" placeholder=" Telefone: " class="cx-grande"><br/>
				<input type="password" name="senha" placeholder=" Senha: " class="lad">
				<input type="password" name="confsenha" placeholder=" Conf. Senha: " class="lad">
				<input type="button" name="salv" value="Salvar" id="button-pub">
			</form>

			<!-- Apagar Conta -->
			<button class="btn-del">Apagar Conta</button>
		</article>
	</div>
</body>
</html>