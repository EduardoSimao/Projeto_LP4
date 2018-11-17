<!DOCTYPE html>

<?php
require_once('../controller/controllerUsuario.php');
Processo('incluir');

?>
<html>
<head>
    <title></title>
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
                <form>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nome Completo</label>
                                <input type="text" placeholder="Insira seu nome completo" class="form-control" name="nome">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Data de Nascimento</label>
                                <input type="date" class="form-control" name="dtNascimento">
                            </div>					
                            <div class="col-sm-6 form-group">
                                <label>E-mail</label>
                                <input type="text" placeholder="Insira seu e-mail" class="form-control">
                            </div>
                            <script src="js/cadastroUsuario.js"></script>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Usuario</label>
                                <input type="text" placeholder="Usuario" class="form-control" name="username">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Senha</label>
                                <input type="password" placeholder="Senha" class="form-control" name="senha">
                            </div>
                        </div>
                        <button type="button" class="btn btn-block btn-info">Cadastrar</button> 					
                    </div>
                </form> 
            </div>
        </div>
    </div>
</body>

  <footer class="">
    <?php include("footer.php"); ?>
  </footer>
</html>