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
  <title>Crie sua enquete - Survey</title>
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
   <div id="loginbox" style="margin-top:0px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2"> 
        <form name="form" action="inserir_pergunta.php"  method="POST" >
            <div class="panel panel-info painel-customize" >
                <div class="panel-heading">
                    <div class="panel-title">Survey.com | Criar enquete</div>
                </div>     
            <div style="padding-top:10px" class="panel-body" >
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    <form id="loginform" class="form-horizontal" role="form" required="true">
                        <div style="margin-bottom: 5px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                            <input id="login-username" type="text" class="form-control" required="true" name="pergunta" value="" placeholder="Pergunta">
                            <input id="login-username" type="date" class="form-control" required="true" name="inicio"placeholder="De" require="true" >
                            <input id="login-username" type="date" class="form-control" required="true" name="fim" placeholder="Até" value="fim" require="true">                                         
                        </div>
                        <div style="margin-bottom: 5px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                            <input id="login-username" type="text" class="form-control" required="true" name="alternativa" value="" placeholder="alternativa 1">
                        </div>
                        <div style="margin-bottom: 5px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                            <input id="login-username" type="text" class="form-control" required="true" name="alternativa2" value="" placeholder="alternativa 2">                                        
                        </div>
                        <div style="margin-bottom: 5px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                            <input id="login-username" type="text" class="form-control"required="true" name="alternativa3" value="" placeholder="alternativa 3" >                                        
                        </div>
                        <div style="margin-bottom: 5px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                            <input id="login-username" type="text" class="form-control" required="true" name="alternativa4" value="" placeholder="alternativa 4" >                                        
                        </div>
                        <div style="margin-bottom: 5px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                            <input id="login-username" type="text" class="form-control" required="true" name="alternativa5" value="" placeholder="alternativa 5" >                                        
                        </div>
                        <div  class="input-group">
                              <input id="btn-login" type="submit"  class="btn btn-info" value="Salvar" action="inserir_pergunta.php">                           
                    </form>                      
                </div> 
            </div>
        </form>
    </div>
</div>
</div>
<footer class="navbar-customize navbar-fixed-bottom">
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