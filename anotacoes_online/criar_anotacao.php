<?require_once('verificacao_logado.php')?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>fazer anotação</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="estilo/estilo_home.css" rel="stylesheet">
		<link href="estilo/estilo.css" rel="stylesheet">
	</head>
	<body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
		<div class="conteudo">
			<h1 class="logo">Anotação</h1>
			<form action="anotacoes.php" method="post">
				<div>titulo:</div>
				<input type="text" name="titulo">
				<div>descrição:</div>
				<input type="text" name="descricao">
				<button type="submit" class="btn btn-outline-primary btn-lg">salvar</button>
			</form>
				<div class="botao_voltar">
					<a class="btn btn-outline-danger btn-lg" id="botao_voltar_criar_anotacao" href="home.php">voltar</a>
				</div>
		</div>
	</body>
</html>