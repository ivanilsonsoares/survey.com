<?php
require("phplot.php");
require_once"conectar.php";
$conexao= conexao();
$SQL=$conexao ->prepare("select * FROM opicao where pergunta_id_pergunta = ? ");
$SQL->bind_param('i',$_GET['id_per']);
$SQL->execute();
$resultados = $SQL -> get_result();
$arma=$resultados->fetch_all(MYSQLI_ASSOC);





$grafico = new PHPlot(750,600);

$grafico->SetFileFormat("png");


$grafico->SetTitle("Resultados Parciais");
$grafico->SetXTitle("");
$grafico->SetYTitle("");



$dados = array(

);

foreach($arma as $opcao){
    $dados[] = array($opcao['opi_opicao'],$opcao['opi_voto']);
}

$grafico->SetDataValues($dados);
 $grafico->SetPlotType("bars");
 $grafico->DrawGraph();
?>