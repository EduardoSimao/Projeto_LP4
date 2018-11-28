<!DOCTYPE html>
<?php
session_start();
if(!isset ($_SESSION['nome']) == true)
{
  unset($_SESSION['nome']);
  header('location:listarevento.php');
 
}

require_once('../controller/controllerAgenda.php');
Processo('incluirFile');
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Upload File</title>        
    <script src="js/Validar.js"></script>
    <?php include("bootstrap.php"); ?>
    <link href="css/geral.css" rel="stylesheet">
</head>
<body>
    <?php include("menu.php");?>
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="img/file.png" />
            
            <form class="form-upload" method="post" enctype="multipart/form-data" action="" name="formFile">           
                <h3>Upload File CSV</h3>
                <input type="file" name="arq1" value="" class="file-upload"required /><br>
                               
                <button class="btn btn-primary btn-upload" type="button" onclick="validar(document.formFile)">
                <span class="glyphicon glyphicon-download-alt"></span> Enviar
                </button>
                <input type="hidden" name="ok" id="ok" /> 
                <a href="evento.php"> <button class="btn btn-primary btn-upload" type="button">Cancelar</button></a>
            </form>
        </div>
    </div>
</body>
</html>
    