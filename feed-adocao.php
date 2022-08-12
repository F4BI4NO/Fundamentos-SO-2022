<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="whidth=device-whidth, initial-scale=1"> <!-- Faz a largua da página ser igual a largura do dispositivo (initial... = Nível inicial do zom). -->
	<title>Animal Support</title>
	<link rel="stylesheet" type="text/css" href="_css/stile.css">
	<meta name="description" content="Descrição do site"> <!-- Descrição -->
	<meta name="keywords" content="Palavras, chave"> <!-- Palavras Chave -->
	<meta name="robots" content="inicio, follow"> <!-- Motores de busca google (Começa na pagina inicial e depois vai para todos os links que encontrar nela) -->
	<meta name="autor" content="Fabiano"> <!-- Autor do site -->
	<link rel="stylesheet" type="text/css" href="_css/stilo.css"> <!-- Arquivo css -->
	<script src="https://kit.fontawesome.com/c5aa25288e.js" crossorigin="anonymous"></script> <!-- Import do font awelson -->
	<link rel="icon" href=""> <!-- Icone do site -->
</head>
<body>
	<!-- Cabeçalho -->
	<?php include 'cabecalho.php' ?>

	<!-- Área de Posts -->
	<div class="cont">
		<article class="article">
			<div id="feed">
				<h1><i class="fas fa-user-circle"> ACAPAM Caicó</i></h1>
				<img src="_imagens/Pub1.jpg">
				<div class="caracts">
					<p><b>Sexo:</b><br/> Masculinoooo</p>
					<p><b>Idade:</b><br/> 6 Meses</p>
					<p><b>Raça:</b><br/> Vira-Lata</p>
					<p><b>Contato:</b><br/> (84) 9.9898-9999</p>
				</div>
				<p>Banho, tosa, cortar unhas, escovar o pêlo e também os dentes. Todos esses são cuidados básicos e que devem se tornar um hábito para manter a higiene do seu cão em dia...
				</p>
				<?php if ($_SESSION) { ?>
				<div class="btn-apg">
					<button>Doado!</button>
					<button>Apagar</button>
				</div>
				<?php } ?>
			</div>

			<div id="feed">
				<h1><i class="fas fa-user-circle"> ACAPAM Caicó</i></h1>
				<img src="_imagens/Pub1.jpg">
				<div class="caracts">
					<p><b>Sexo:</b><br/> Masculinoooo</p>
					<p><b>Idade:</b><br/> 6 Meses</p>
					<p><b>Raça:</b><br/> Vira-Lata</p>
					<p><b>Contato:</b><br/> (84) 9.9898-9999</p>
				</div>
				<p>Banho, tosa, cortar unhas, escovar o pêlo e também os dentes. Todos esses são cuidados básicos e que devem se tornar um hábito para manter a higiene do seu cão em dia...
				</p>
				<div class="status">
					<h3>Doado!</h3>
				</div>
				<?php if ($_SESSION) { ?>
				<div class="btn-apg">
					<button>Doado!</button>
					<button>Apagar</button>
				</div>
				<?php } ?>
			</div>
		</article>

		<aside class="lateral">
			<div class="apoiadores">
				<img src="_imagens/apoio1.png" width="80%">
				<p><a href="">Apoiar</a></p>
			</div>
		</aside>
	</div>
</body>
</html>