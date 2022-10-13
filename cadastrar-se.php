<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="estilo/estilo.css" rel="stylesheet">
		<title>Cadastrar-se</title>
	</head>
	<body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
		<div class="conteudo">
				<h1 class = "logo">Cadastrar-se</h1>
				<!--Formulario de cadastro-->
				<form action="cadastros.php" method="post">
					<div class="texto">nome:</div>
					<input type="form" name="nome_cadastro" class ="input_texto">
					<div class="campo_texto">
					<div class="texto">e-mail:</div>
					<input type="form" name="e-mail_cadastro" class ="input_texto">
					<div class="texto">senha:</div>
					<input type="form" name="senha_cadastro" class ="input_texto">
					<button type="submit" class="btn btn-outline-primary">Cadastrar-se</button>
				</form>
				<div class="botao_voltar">
					<a class="btn btn-outline-danger" href="index.php">voltar</a>
				</div>
		</div>
	</body>
</html>