<?php
session_start();
$_SESSION['logado'] = false;

// abre o arquivo
$arquivo = fopen('../../anotações_online_scripts/cadastros.txt','r');
$autenticado = false;

// enquanto o arquivo tiver linhas para percorrer
while(!feof($arquivo))
{
	// tratando as informações da linha lida
	$chamado_bruto = fgets($arquivo);
	$chamado_polido = substr($chamado_bruto,0, (strlen($chamado_bruto) -2));

	// colocando em um array e o sobreescrevendo
	$cadastro = explode('#',$chamado_polido);

	if(count($cadastro) < 3) {continue;}

	// verificando se o login existe
	if($cadastro[1] == $_POST['e-mail'] && $cadastro[2] == $_POST['senha'])
	{
		$autenticado = true;
		$_SESSION['nome'] = $cadastro[0];
		$_SESSION['email'] = $cadastro[1];
	}
}
	/* caso autenticado, ira para a home, se não, voltara para o menu
	com uma mensagem de erro*/
	if($autenticado)
	{
		$_SESSION['logado'] = true;
		header('location: home.php');
	}
	else
	{
		header('location: index.php?erro=1');
	}

	// fecha o arquivo
	fclose($arquivo);
?>