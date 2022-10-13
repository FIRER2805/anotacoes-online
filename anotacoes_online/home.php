<?require_once('verificacao_logado.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="estilo/estilo_home.css" rel="stylesheet">
</head>
	<body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
		<div class="conteudo">
			<h1 class="logo">Bem-Vindo(a) <?= $_SESSION['nome'];?></h1>
			<div class="menu">
				<a href="criar_anotacao.php" class="btn btn-outline-primary btn-lg">fazer anotação</a>
				<a href="mostrar_anotacoes.php" class="btn btn-outline-primary btn-lg">ver anotações</a>
				<a href="logoff.php" class="btn btn-outline-danger btn-lg" id="botao_sair">sair</a>
			</div>
			<?if(array_key_exists('status',$_GET))
			{
			switch($_GET['status'])
			{
				case 1:?>
				<p class="text-danger">Anotação feita com sucesso!</p>
				<?break;
			}
		}?>
		</div>
	</body>
</html>