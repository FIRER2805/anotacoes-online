<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastrar-se</title>
	</head>
	<body>
		<div class = "tela">
			<div class="conteudo">
				<h1 class = "logo">Cadastrar-se</h1>
				<!--Formulario de cadastro-->
				<form action="cadastros.php" method="post">
					<div class="campo_texto">
						<span>nome:</span>
						<input type="form" name="nome_cadastro" class ="input_texto">
					</div>
					<br>
					<div class="campo_texto">
						<span>e-mail:</span>
						<input type="form" name="e-mail_cadastro" class ="input_texto">
					</div>
					<br>
					<div class="campo_texto">
						<span>senha:</span>
						<input type="form" name="senha_cadastro" class ="input_texto">
					</div>
					<br>
					<button type="submit" class="btn btn-outline-danger">Cadastrar-se</button>
					<!-- div para finalizar o fluxo -->
					<div class="break"></div>
				</form>
			</div>
		</div>
	</body>
</html>