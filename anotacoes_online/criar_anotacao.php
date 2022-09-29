<?require_once('verificacao_logado.php')?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>fazer anotação</title>
	</head>
	<body>
		<form action="anotacoes.php" method="post">
			titulo:
			<input type="text" name="titulo">
			descrição:
			<input type="text" name="descricao">
			<button type="submit">salvar</button>
		</form>
	</body>
</html>