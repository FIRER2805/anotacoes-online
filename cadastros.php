<?php
	// trata as informações enviadas pelo front-end
	$cadastro = implode('#',$_POST) . PHP_EOL;
	// abre o arquivo e escreve as informações
	$arquivo = fopen('../../anotações_online_scripts/cadastros.txt','a');
	fwrite($arquivo,$cadastro);
	fclose($arquivo);
	header('Location: index.php');
?>