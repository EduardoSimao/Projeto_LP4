<!DOCTYPE html>

<?php
session_start();
if(!isset ($_SESSION['nome']) == true)
{
  unset($_SESSION['nome']);
  header('location:listarevento.php');
 

}

require_once('../controller/controllerAgenda.php');
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
        <h1 class="well">Cadastro de Compromissos</h1>
        <div class="col-lg-12 well">
            <div class="row">
                <form action="" name="form" method="POST">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Titulo</label>
                                <input type="text" placeholder="Insira o titulo do compromissos" class="form-control" name="titulo">
                            </div>                            
                            <div class="col-sm-6 form-group">
                                <label>Data</label>
                                <input type="date" class="form-control" name="data">
                            </div>                            
                            <div class="col-sm-6 form-group">
                                <label>Hora</label>
                                <input type="time" class="form-control" name="hora">
                            </div>			
                                                   
                            <div class="col-sm-6 form-group">
                                <label>Local</label>
                                <input type="text" class="form-control" name="local">
                            </div>
                            	
                            <div class="col-sm-12 form-group">
                                <label>Descrição do Evento</label>
                                <input type="text" placeholder="Descreva o evento" class="form-control " name="descricao" >
                            </div>
                        </div>
                        
                        <button type="button" class="btn btn-block btn-primary" onclick="validar(document.form);">Cadastrar</button> 					
                        <br /><center> Ou </center><br />
                        <a href="addCSV.php"><button type="button" class="btn btn-block btn-primary">Enviar Arquivo CSV</button></a>				

                        <input type="hidden" name="ok" id="ok" />   
                    </div>
                </form> 
            </div>
        </div>
    </div>
</body>

  <footer class="footerRegular">
    <?php include("footer.php"); ?>
  </footer>
</html>