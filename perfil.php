<!DOCTYPE html>
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
  <title>Survey - Sua resposta está aqui</title>
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
                        <li><a href="index.php"class="navbar-link">sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</header>
<div class="conteiner">
    <div class="container-fluid">
        <div id="loginbox" style="margin-top:10px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2"> 
            <div class="panel panel-info painel-customize" >
                <div class="panel-heading">
                    <div class="panel-title">Survey.com | Enquetes disponíveis</div>
                </div> 
            <div class="container-fluid">
                <form method="post">
	                <div class="tabelaenquete">
		                <div class="col-md-12 "></div>
	                </div>	
	                <div class="row enquete">
                        <center>
                            <div class="col-md-12">
                                <table class="table table-striped table-customize table-bordered table-condensed table-respansive" style="margin-top:10px" style=":black;" >
                                    <tr> 
                                        <th>Enquetes</th>				
                                        <th id="data">Data - Hora</th>
                                    </tr>
                                    <tbody id="enquete" style="color:black"></tbody>
                                </table>
                            </div>
                        </center>		
	                </div>	
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
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
<script src="js/listar.js"></script>
</body>
</html>