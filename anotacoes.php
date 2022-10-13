<?php
require_once('verificacao_logado.php');
$anotacao = [];
// removendo todos os '|' do $_POST e colocando em um array
foreach($_POST as $item)
{
	$anotacao[] = str_replace('|','',$item);
}
// arrumar a linha de baixo pq pelo amor de deus
$anotacao_tratada = implode('|',$anotacao) . '|' . $_SESSION['email'] . PHP_EOL;
$arquivo = fopen('../../anotações_online_scripts/anotacoes.txt','a');
fwrite($arquivo,$anotacao_tratada);
fclose($arquivo);
header('location: home.php?status=1');
?>