<?php 
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$opc=$_POST["opc"];
//echo "$opc";
$conexao=mysqli_connect("localhost","root","");
mysqli_select_db($conexao,"enquete");
$sql="SELECT * FROM enquete ";
$resultado=mysqli_query($conexao, $sql);
$pegar=mysqli_fetch_array($resultado);
$otimo=$pegar["otimo"]+1;
$bom=$pegar["bom"]+1;
$mais_ou_menos=$pegar["mais_ou_menos"]+1;
$ruim=$pegar["ruim"]+1;
if($opc=="otimo")
{
$sql="UPDATE enquete set otimo=$otimo";
}
if($opc=="bom")
{
$sql="UPDATE enquete set bom=$bom";
}
if($opc=="mais_ou_menos")
{
$sql="UPDATE enquete set mais_ou_menos=$mais_ou_menos";
}
if($opc=="ruim")
{
$sql="UPDATE enquete set ruim=$ruim";
}
$resultao=mysqli_query($conexao,$sql);


?>
<script language="JavaScript">

 window.location.href="perfil.php";
</script>