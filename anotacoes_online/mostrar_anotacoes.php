<?require_once('verificacao_logado.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Anotações</title>
	</head>
	<body>
		<?php
		// abre o arquivo
		$arquivo = fopen('anotacoes.txt', 'r');

		// percorre o arquivo enquanto tiver linha
		while(!feof($arquivo))
		{
			// sobre-escreve o array
			$anotacao = explode('|',fgets($arquivo));
			if(count($anotacao) == 3)
			{
				$email = substr($anotacao[2],0,-2);
				if($_SESSION['email'] == $email)
				{
			?>
			<h2><?=$anotacao[0]?></h2>
			<h3><?=$anotacao[1]?></h3>
			<? }
			}
	} ?>
	<a href="home.php">voltar</a>
	</body>
</html>