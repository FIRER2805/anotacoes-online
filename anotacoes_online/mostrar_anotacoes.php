<?require_once('verificacao_logado.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Anotações</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="estilo/estilo_home.css" rel="stylesheet">
	</head>
	<body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
		<div class="conteudo">
			<h1 class="logo">Anotações</h1>
			<div class="anotacoes">
				<?php
				// abre o arquivo
				$arquivo = fopen('../../anotações_online_scripts/anotacoes.txt', 'r');

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
					<div class="anotacao">
						<h2 class="titulo"><?=$anotacao[0]?></h2>
						<h3 class="descricao"><?=$anotacao[1]?></h3>
					</div>
					<? }
					}
				} ?>
				<div class="break"></div>
				<a href="home.php" class="btn btn-outline-danger btn-lg" id="botao_sair_anotacoes">voltar</a>
			</div>
		<div>
	</body>
</html>