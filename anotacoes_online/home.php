<?require_once('verificacao_logado.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>
</head>
	<body>
		<h1>Bem-Vindo(a) <?= $_SESSION['nome'];?></h1>
		<a href="criar_anotacao.php">fazer anotação</a>
		<br>
		<a href="mostrar_anotacoes.php">ver anotações</a>
		<br>
		<a href="logoff.php">sair</a>
		<?if(array_key_exists('status',$_GET))
		{
			switch($_GET['status'])
			{
				case 1:?>
				<p>Anotação feita com sucesso!</p>
				<?break;
			}
		}?>
	</body>
</html>