<!DOCTYPE html>

<?php
require_once('../controller/controllerUsuario.php');
Processo('incluir');

?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/Validar.js"></script>
</head>
<body>

<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Pagina Inicial</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Agenda<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Ver todos eventos</a></li>
                <li><a href="#">Cadastrar evento</a></li>
              </ul>
            </li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Sobre</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Cadastrar</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
          </ul>
        </div>
    </nav>
<header>

    <div class="container">
        <h1 class="well">Cadastro</h1>
        <div class="col-lg-12 well">
            <div class="row">
                <form>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nome</label>
                                <input type="text" placeholder="Insira seu nome" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Sobrenome</label>
                                <input type="text" placeholder="Insira seu sobrenome" class="form-control">
                            </div>
                        </div>					
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" placeholder="Insira seu e-mail" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Usuario</label>
                            <input type="text" placeholder="Usuario" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Senha</label>
                            <input type="password" placeholder="Senha" class="form-control">
                        </div>	
                        <button type="button" class="btn btn-lg btn-info">Registrar</button>					
                    </div>
                </form> 
            </div>
        </div>
    </div>
</body>
</html>