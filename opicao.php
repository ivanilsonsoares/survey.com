<html >
<head>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
  <link rel="shortcut icon" href="Img/icon.png">
  <title>Cadastre-se - Survey</title>
  <meta charset="utf-8">
</head>
<body>
<header>
        <nav class="navbar navbar-cores"> 
            <div class="container acert">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">
                    <img class="img-respansive"src="img/logos.png" width="300" style="margin-top:-39.8px; :hover:bakcground;black;" alt="Survey.com"/>
                </div>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="enquetes.php" class="navbar-link">enquetes</a></li>
                        <li><a href="crie-sua-enquete.php"class="navbar-link">crie sua enquete</a></li>
                        <li><a href="cadastre-se.php"class="navbar-link">Cadastre-se</a></li>
                        <li><a href="faca-seu-login.php"class="navbar-link">faça seu login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<div class="cadastro">
<div class="container-fluid">
   <div id="loginbox" style="margin-top:0 px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2"> 
   <form method="post"><div class="panel panel-info painel-customize" >
                <div class="panel-heading">
                    <div class="panel-title">Survey.com | Opçoes da enquete</div>
                </div>     
            <div style="padding-top:30px" class="panel-body" >
	<div class=" tabelaenquete">
		<div class="col-md-12">
		
		</div>
	</div>
	
	<div class="row enquete">
        <center>
		<div class="col-md-12">
			<table class="table table-striped table-bordered table-condensed table-hover">
			<tr>
        <th>Pergunta</th>	
        <th>Opções</th>
        <th>Voto</th>				    
			</tr>
      
			<tbody id="opicao">
			</tbody>
      
			</table>
      	<div class="col-md-1 col-md-offset-8">
		</div>
		</div>
        </center>		
	</div>
		<div class="col-md-1 col-md-offset-8">
		
       <input type="hidden" name="id_pergunta" value="<?php echo $_GET['id_pergunta'] ?>">
       <div>
       </div>
		</div>
    <div>
     <button class="btn btn-info btn-md" id="salvar"action="enquetes.php" >Votar</button>
    <td bordercolor="#000000"><a href="teste.php?id_per=<?php echo $_GET['id_pergunta'] ?>"class="btn btn-info btn-md" >Resultado  Parcial</font></a>&nbsp;</td>
    </div>
    <div> </div>
</form>
</div>
 <script src="js/listar.js"></script>
 <footer>
    <nav class="navbar navbar-customize navbar-fixed-bottom">
           <div class="container">
            <div class="conteudo-extra" id="borda-footer">    
                <div class="container"> 
                        <div class="col-md-4"> 
                            <a href="https://pt-br.facebook.com/"><img class="right conf-img img mg-respansive" src="img/facebook.png"/></a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://twitter.com/"><img class="center conf-img img img-respansive" src="img/twitter.png"/></a>
                        </div>
                        <div class="col-md-4 ">
                            <a href="https://plus.google.com/collections/featured"><img class="left conf-img img img-respansive" src="img/google-plus.png"/></a>
                        </div>
                </div>
              </div>
                    <center><span>&copy; 2017 - Survey.com  Sua  Resposta  Está  Aqui</span></center>
            </div>  
        </div>
</footer>
</body>
</html>