<?php 
$conexao = mysqli_connect("localhost","root",""); 
mysqli_select_db($conexao,"enquete");
$sql="SELECT * FROM enquete ";
$resultado=mysqli_query($conexao,$sql);
$pegar=mysqli_fetch_array($resultado);
$otimo=$pegar["otimo"];
$bom=$pegar["bom"];
$mais_ou_menos=$pegar["mais_ou_menos"];
$ruim=$pegar["ruim"];
$soma=$otimo+$bom+$mais_ou_menos+$ruim;

?>
<html>
<head>
<title>Enquete</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body >
<center>
<form action="votar.php" method="post">
    <table width="310" border="1">
      <tr bgcolor="#FFFFFF"> 
        <td colspan="4" align="center" bordercolor="#000000"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>=======
        </strong></font></td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td colspan="4" align="center" bordercolor="#000000"><em><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>=========
        </strong></font></em></td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td colspan="2" align="center" bordercolor="#000000">&nbsp;</td>
        <td width="55" align="center" bordercolor="#000000"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>votos</strong></font></td>
        <td width="67" align="center" bordercolor="#000000"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>%</strong></font></td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td width="23" align="center" bordercolor="#000000" bgcolor="#00FF33">&nbsp;</td>
        <td width="125" align="left" bordercolor="#000000"><strong><font color="#00FF33" size="2" face="Verdana, Arial, Helvetica, sans-serif">&Oacute;timo</font></strong></td>
        <td align="center" bordercolor="#000000"><?php echo "$otimo"; ?>&nbsp;</td>
        <td align="center" bordercolor="#000000"> 
          <?php
 if($otimo==0)
 echo "$otimo %"; 
else {

$divide=($otimo/$soma)*100; 
$divide=number_format($divide,2,',','.'); 
echo "$divide %"; }?>
          &nbsp;</td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td align="center" bordercolor="#000000" bgcolor="#0000FF">&nbsp;</td>
        <td align="left" bordercolor="#000000"><strong><font color="#0000FF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Bom</font></strong></td>
        <td align="center" bordercolor="#000000"><?php echo "$bom"; ?>&nbsp;</td>
        <td align="center" bordercolor="#000000"> 
          <?php if($bom==0)
 echo "$bom %"; 
else {
$divide=($bom/$soma)*100; 
$divide=number_format($divide,2,',','.'); 
echo "$divide %"; }?>
          &nbsp;</td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td align="center" bordercolor="#000000" bgcolor="#FF9900">&nbsp;</td>
        <td align="left" bordercolor="#000000"><strong><font color="#FF9900" size="2" face="Verdana, Arial, Helvetica, sans-serif">Mais 
          ou Menos</font></strong></td>
        <td align="center" bordercolor="#000000"><?php echo "$mais_ou_menos"; ?>&nbsp;</td>
        <td align="center" bordercolor="#000000"> 
          <?php if($mais_ou_menos==0)
 echo "$mais_ou_menos %"; 
else {
$divide=($mais_ou_menos/$soma)*100; 
$divide=number_format($divide,2,',','.'); 
echo "$divide %"; }?>
          &nbsp;</td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td align="center" bordercolor="#000000" bgcolor="#FF0000">&nbsp;</td>
        <td align="left" bordercolor="#000000"><strong><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Ruim</font></strong></td>
        <td align="center" bordercolor="#000000"><?php echo "$ruim"; ?>&nbsp;</td>
        <td align="center" bordercolor="#000000"> 
          <?php if($ruim==0)
 echo "$ruim %"; 
else {
$divide=($ruim/$soma)*100; 
$divide=number_format($divide,2,',','.'); 
echo "$divide %"; }?>
          &nbsp;</td>
      </tr>
      <tr align="right" bgcolor="#FFFFFF"> 
        <td colspan="4" align="center" bordercolor="#000000"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
         </font></strong></td>
      </tr>
    </table>
</form>
</center>
<script src="js/listar.js"></script>
</body>
</html>
