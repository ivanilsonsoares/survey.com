<?php
require_once"conectar.php";
function sal(){
$voto = $_GET['opicoes'];
$id_per = $_GET['id_per'];
$conexao= conexao();
$Query="update opicao set opi_voto = opi_voto+1 where id_opicao=?";
$executa=$conexao->prepare($Query);
$executa->bind_param('i',$voto);
$sucesso = $executa->execute();
return $sucesso;
}

echo json_encode(['salvou' =>sal()]);
?>