<?php
require_once  "conectar.php";
$nome=$_POST['nome'];
$senha=$_POST['senha'];
$email=$_POST['email'];


$conexao= conexao();
$Query="INSERT INTO cadastro(cad_nome,cad_senha,cad_email) values (?,?,?);";
$executa=$conexao->prepare($Query);
$executa->bind_param('sss',$nome,$senha,$email);
$arma=$executa->execute();
$conexao->close();

if($arma==true){
	header("Location: perfil.php");
}else{
		header("Location: enquetes.php");
}
?>
