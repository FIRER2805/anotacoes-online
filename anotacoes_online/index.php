<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Anotações</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="estilo/estilo.css" rel="stylesheet">

	</head>
	<body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

		<div class="conteudo">
			<h1 class="logo">Anotações online</h1>
			<!--Formulario de login-->
			<form action="login.php" method="post">
				<div class="texto">e-mail:</div>
				<input type="form" name="e-mail">
				<div class="texto">senha:</div>
				<input type="password" name="senha">
				<div class="btn-group">
					<button type="submit" class="btn btn-outline-primary">Fazer Login</button>
				</div>
			</form>

			<!-- botão para cadastro -->
			<div class="botao">
				<a href="cadastrar-se.php" class="btn btn-outline-primary">Cadastrar-se</a>
			</div>
		<?php
		// se houver erro, ira informar uma mensagem personalizada
		if(array_key_exists('erro',$_GET))
		{
			switch($_GET['erro'])
			{
				case 1: ?>
				<p class="text-danger">Login invalido</p>
				<? break;
				case 2:?>
				<p class="text-danger">Faça login para acessar o sistema</p>
				<?
				break;
			}
		}?>
		</div>
	</body>
</html>