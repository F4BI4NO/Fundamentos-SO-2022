<?php
include("config.php");
if(isset($_POST['nome'])){
	extract($_POST);
	if($nome == $usuarioadm && $senha == $senhaadm){
		$_SESSION['nome'] = "1";
		header("Location: inicio.php");
	}
	else {
		echo "Usuário ou senha inválidos";
	}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Animal Support</title>
	<link rel="stylesheet" type="text/css" href="_css/stile.css">
</head>
<body class="bd-ent-cad">
	<nav class="corp-ent-cad">
		<div class="form-ent-cad">
			<form method="POST" action="?">
				<img src="_imagens/Logo-Animal_Support.png" width="40%">
				<input type="text" name="nome" placeholder=" Nome:" autofocus=""><br/>
				<input type="password" name="senha" placeholder=" Senha:"><br/>
				<input type="submit" name="entrar" value="Entrar" id="btn">
			</form>
		</div>
	</nav>
</body>
</html>