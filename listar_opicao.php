<?php
require_once"conectar.php";
 function listar_opicao(){
$conexao= conexao();
$SQL=$conexao ->prepare("select opi_opicao,id_pergunta,per_pergunta,id_opicao FROM opicao inner join pergunta on pergunta_id_pergunta=id_pergunta where id_pergunta = ? ");
$SQL->bind_param('i',$_GET['id_pergunta']);
$SQL->execute();
$resultados = $SQL -> get_result();
$arma=$resultados->fetch_all(MYSQLI_ASSOC);
return $arma;
 }
echo json_encode(listar_opicao());



?>