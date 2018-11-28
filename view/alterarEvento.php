<!DOCTYPE html>

<?php
session_start();
if(!isset ($_SESSION['nome']) == true)
{
  unset($_SESSION['nome']);
  header('location:listarevento.php');
}

require_once('../controller/controllerAgenda.php');
Processo('alterar');
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'agendadb';
$row = array();

$connection = new mysqli($hostname, $username, $password);
mysqli_select_db($connection, $db);

$select_evento = "SELECT * FROM agenda WHERE idagenda=".$_REQUEST['idagenda']."";
$compromissos = mysqli_query($connection, $select_evento) or die ('Error');

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
<?php while ($row = $compromissos) { ?>
    <div class="container">
        <h1 class="well">Alterar Evento</h1>
        <div class="col-lg-12 well">
            <div class="row">
                <form action="" name="form" method="POST">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Titulo</label>
                                <input type="text" class="form-control" name="titulo" value= '<?php echo $row['titulo']; ?>'>
                            </div>                            
                            <div class="col-sm-6 form-group">
                                <label>Data</label>
                                <input type="date" class="form-control" name="data" value= '<?php echo $row['data']; ?>'>
                            </div>                            
                            <div class="col-sm-6 form-group">
                                <label>Hora</label>
                                <input type="time" class="form-control" name="hora" value= '<?php echo $row['hora']; ?>'>
                            </div>			
                                                   
                            <div class="col-sm-6 form-group">
                                <label>Local</label>
                                <input type="text" class="form-control" name="local" value= '<?php echo $row['local']; ?>'>
                            </div>
                            	
                            <div class="col-sm-12 form-group">
                                <label>Descrição do Evento</label>
                                <input type="text" class="form-control " name="descricao" value= '<?php echo $row['descricao']; ?>'>
                            </div>
                        </div>
                        
                        <button type="button" class="btn btn-block btn-primary" onclick="validarInformacao(document.editform);">Alterar</button> 					
                        <br />
                        <input type="hidden" name="ok" id="ok" />                       
                        <input type="hidden" name="processo"/>
                    </div>
                </form> 
            </div>
        </div>
    </div>
<?php } ?>
</body>
  <footer class="">
    <?php include("footer.php"); ?>
  </footer>
</html>