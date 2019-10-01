<?php
require_once"conectar.php";
 function listar_enquetes(){
$conexao= conexao();
$SQL=$conexao ->prepare("select * FROM pergunta");
$SQL->execute();
$resultados = $SQL -> get_result();
$arma=$resultados->fetch_all(MYSQLI_ASSOC);
return $arma;
 }
echo json_encode(listar_enquetes());

?>