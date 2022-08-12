<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="whidth=device-whidth, initial-scale=1"> <!-- Faz a largua da página ser igual a largura do dispositivo (initial... = Nível inicial do zom). -->
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/stile.css">
	<meta name="description" content="Descrição do site"> <!-- Descrição -->
	<meta name="keywords" content="Palavras, chave"> <!-- Palavras Chave -->
	<meta name="robots" content="inicio, follow"> <!-- Motores de busca google (Começa na pagina inicial e depois vai para todos os links que encontrar nela) -->
	<meta name="autor" content="Fabiano"> <!-- Autor do site -->
	<link rel="stylesheet" type="text/css" href="_css/stilo.css"> <!-- Arquivo css -->
	<script src="https://kit.fontawesome.com/c5aa25288e.js" crossorigin="anonymous"></script> <!-- Import do font awelson -->
	<link rel="icon" href=""> <!-- Icone do site -->
</head>
<body class="princ">
	<header class="cabecalho">
		<div class="cabp1">
			<!-- Cabeçalho P1 ADM -->
			<?php if ($_SESSION) { ?>
			<div class="usr">
				<ul>
					<li><i class="fas fa-user-circle"></i></li>
					<li>ACAPAM Caicó 
						<ul>
							<li><a href="pub-blog.php">Publicar no Blog</a></li>
							<li><a href="pub-feed.php">Publicar no Feed</a></li><br/>
							<li><a href="configuracoes.php">Configurações</a></li>
							<li><a href="sair.php">Sair</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<?php } ?>
			<div class="redes">
				<ul>
					<li>
						<a href="https://www.instagram.com/acapamcaico/" target="_blank"><img src="_imagens/inc-inst.png" width="30" height="30px"></a>
					</li>
					<li>
						<a href="https://web.whatsapp.com/" target="_blank"><img src="_imagens/inc-wpp.png" width="30" height="30px"></a>
					</li>
				</ul>
			</div>
			<?php if (!$_SESSION) { ?>
			<!-- Cabeçalho P1 Público -->
			<div class="pub">
				<h1>AnimalSupport</h1>
			</div>
			<?php } ?>
		</div>

		<!-- Cabeçalho P2 -->
		<div class="cabp2">
			<!-- Menu Geral -->
			<ul>
				<li><a href="index.php">INÍCIO</a></li>
				<li><a href="feed-adocao.php">FEED DE ADOÇÃO</a></li>
				<li><a href="doacoes.php">DOAÇÕES</a></li>
			</ul>
			<button class="btn-menu"><a href="#" style="color: white;"><i class="fas fa-bars"></i></a></button>
			<!-- Menu do Botão -->
			<ul class="menbtn">
				<li><a href="inicio.php">INÍCIO</a></li>
				<li><a href="feed-adocao.php">FEED DE ADOÇÃO</a></li>
				<li><a href="doacoes.php">DOAÇÕES</a></li>
				<li id="btn"><a href="#" class="btn-close">x</a></li>
			</ul>
		</div>
		<!-- Ação de Abrir e fechar o menu -->
		<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
		<script>
			$(".btn-menu").click(function(){
				$(".menbtn").show();
			});
			$(".btn-close").click(function(){
				$(".menbtn").hide();
			});
		</script>
	</header>
	<nav class="corpo">
		
	</nav>
</body>
</html>