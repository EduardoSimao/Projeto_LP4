<!DOCTYPE html>

<?php
require_once('../controller/controllerUsuario.php');
Processo('incluir');

?>
<html>
<head>
    <title></title>    
    <script src="js/Validar.js"></script>
    <?php include("bootstrap.php"); ?>
</head>
<body>

<header>
    <?php include("menu.php"); ?>
<header>

    <div class="container">
        <h1 class="well">Cadastro</h1>
        <div class="col-lg-12 well">
            <div class="row">
                <form action="" name="form" method="POST">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nome Completo</label>
                                <input type="text" placeholder="Insira seu nome completo" class="form-control" name="nome">
                            </div>                            
                            <div class="col-sm-6 form-group">
                                <label>Usuario</label>
                                <input type="text" placeholder="Usuario" class="form-control" name="username">
                            </div>                            
                            <div class="col-sm-6 form-group">
                                <label>Senha</label>
                                <input type="password" placeholder="Senha" class="form-control" name="senha">
                            </div>					
                            <div class="col-sm-6 form-group">
                                <label>Confirmar Senha</label>
                                <input type="password" placeholder="Confirme sua Senha" class="form-control" name="confSenha">
                            </div>
                            <script src="js/cadastroUsuario.js"></script>
                        </div>
                        <div class="row">                        
                            <div class="col-sm-6 form-group">
                                <label>Data de Nascimento</label>
                                <input type="date" class="form-control" name="dtNascimento">
                            </div>
                            <div class="col-sm-6 form-group">
                                 <label>Gênero</label><br>
                                <input type="radio" name="genero" value="homem"> Homem
                                <input type="radio" name="genero" value="mulher"> Mulher
                                <input type="radio" name="genero" value="outros"> Outro
                            </div>
                        </div>
                        <button type="button" class="btn btn-block btn-primary" onclick="validar(document.form);">Cadastrar</button> 					
                        <input type="hidden" name="ok" id="ok" />   
                    </div>
                </form> 
            </div>
        </div>
    </div><br>
</body>

  <footer class="">
    <?php include("footer.php"); ?>
  </footer>
</html>