<?php
 require_once"conectar.php";

function login(){
 $email=$_POST['email'];
$senha=$_POST['senha'];
$conexao= conexao();
$SQL=$conexao ->prepare("select * FROM cadastro where cad_email=? and cad_senha=?");
$SQL->bind_param('ss',$email,$senha);
$SQL->execute();
$resultados = $SQL -> get_result();
$arma=$resultados->fetch_all(MYSQLI_ASSOC);
return $arma;
}
$result= login();

if(count($result)>0){
    header("Location: perfil.php");    
}else{
    header("Location: index.php");

}

?>