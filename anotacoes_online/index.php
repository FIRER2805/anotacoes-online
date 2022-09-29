<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Anotações</title>
	</head>
	<body>
		<h1>Anotações online</h1>
		<!--Formulario de login-->
		<form action="login.php" method="post">
			e-mail:
			<input type="form" name="e-mail">
			senha:
			<input type="form" name="senha">
			<button type="submit">Fazer Login</button>
		</form>

		<!-- botão para cadastro -->
		<a href="cadastrar-se.php" target="_blank">Cadastrar-se</a>
		<?php
		// se houver erro, ira informar uma mensagem personalizada
		if(array_key_exists('erro',$_GET))
		{
			switch($_GET['erro'])
			{
				case 1: ?>
				<p>Login invalido</p>
				<? break;
				case 2:?>
				<p>Faça login para acessar o sistema</p>
				<?
				break;
			}
		}?>
	</body>
</html>