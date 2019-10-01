<?php
require_once "conectar.php";
 function per(){

 $pergunta = $_POST['pergunta'];
 $inicio = $_POST['inicio'];
 $fim = $_POST['fim'];

 $conexao= conexao();
 $Query="INSERT INTO pergunta(per_pergunta,per_inicio,per_fim) values (?,?,?);";
 $executa=$conexao->prepare($Query);
 $executa->bind_param('sss',$pergunta,$inicio,$fim);
 $executa->execute();
 return $conexao->insert_id; 
  
 }
function alt($id_per){
$alternativa = $_POST['alternativa'];

$estrangeiro = $id_per;

$conexao= conexao();
$Query="INSERT INTO opicao(opi_opicao,pergunta_id_pergunta) values (?,?);";
$executa=$conexao->prepare($Query);
$executa->bind_param('si',$alternativa,$estrangeiro);
$executa->execute();

$executa=$conexao->prepare($Query);
$executa->bind_param('si',$_POST['alternativa2'],$estrangeiro);
$executa->execute();

$executa=$conexao->prepare($Query);
$executa->bind_param('si',$_POST['alternativa3'],$estrangeiro);
$executa->execute();

$executa=$conexao->prepare($Query);
$executa->bind_param('si',$_POST['alternativa4'],$estrangeiro);
$executa->execute();

$executa=$conexao->prepare($Query);
$executa->bind_param('si',$_POST['alternativa5'],$estrangeiro);
$executa->execute();
$conexao->close();


	
}
alt(per());
	 header("Location: enquetes.php");


	
?>

