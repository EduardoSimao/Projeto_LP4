<?php
session_start();
if(!isset ($_SESSION['nome']) == true)
{
  unset($_SESSION['nome']);
  header('location:homepage.php');
 

}
function checked( $v, $d ){
    return $v===$d ? ' checked="checked"' : '';
}

require_once('../controller/controllerUsuario.php');
Processo('editar');
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'agendadb';

$row = array();

$connection = new mysqli($hostname, $username, $password);
mysqli_select_db($connection, $db);

$select_user = "SELECT * FROM users WHERE id=".$_SESSION['id_usurio']."";
$run_user = mysqli_query($connection, $select_user);

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Perfil - <?php echo $_SESSION['nome'] ?></title>
    <script src="js/Validar.js"></script>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php include("bootstrap.php"); ?>
</head>
<body>
    <header>
        <?php include("menu.php"); ?>
    <header>
<?php while ($row = mysqli_fetch_array($run_user)) { ?>      
    
    <?php include("fotoUser.php"); ?>
    
    <div class="container bootstrap snippet">        
        <div class="row">
            <div class="col-sm-0">           
            </div>
            <div class="col-sm-12">            
                <div class="tab-content">
                    <div class="tab-pane active">
                        <form action="" name="editform" method="post">
                            <div class="form-group">                          
                                <div class="col-xs-6">
                                    <label><h4>Nome</h4></label>
                                    <input type="text" class="form-control" name="nome" value= '<?php echo $row['nome']; ?>'>
                                </div>
                            </div>
                            <div class="form-group">                          
                                <div class="col-xs-6">
                                    <label><h4>Usuario</h4></label>
                                    <input type="text" class="form-control" name="username" value= '<?php echo $row['username']; ?>'>
                                </div>
                            </div>          
                            <div class="form-group">                          
                                <div class="col-xs-6">
                                    <label><h4>Data de Nascimento</h4></label>
                                    <input type="date" class="form-control" name="dtNascimento" value= '<?php echo date('Y-m-d', strtotime($row['data_nascimento'])); ?>'>
                                </div>
                            </div> 
                            <div class="form-group">                          
                                <div class="col-xs-6">
                                    <label><h4>E-mail</h4></label>
                                    <input type="email" class="form-control" name="email" value= '<?php echo $row['email']; ?>'>
                                </div>
                            </div>
                            <div class="form-group">                          
                                <div class="col-xs-6">
                                    <label><h4>Telefone</h4></label>
                                    <input type="text" class="form-control" name="telefone" value= '<?php echo $row['telefone']; ?>' >
                                </div>
                            </div>                               
                            <div class="form-group">
                                <div class="col-xs-6">                            
                                    <label><h4>Gênero</h4></label><br> 
                                    <fieldset  class="form-control">                           
                                        <input type="radio" name="genero" value="homem" <?php echo checked($row['sexo'], 'h' ); ?>> Homem
                                        <input type="radio" name="genero" value="mulher" <?php echo checked($row['sexo'], 'm' ); ?>> Mulher
                                        <input type="radio" name="genero" value="outros" <?php echo checked($row['sexo'], 'o' ); ?>> Outro
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                <center>
                                    <br>
                                    <input type="button" class="btn btn-success" name="button" id="button" value="Alterar Dados" onclick="validarInformacao(document.editform);"/>
                                    <input type="hidden" name="ok" id="ok" />                                    
                                    <input type="hidden" name="processo"/>
                                    <input class="btn btn-danger" type="button" value=" Excluir Perfil" onclick="javascript: if (confirm('Você realmente deseja excluir seu Perfil?'))location.href='userPerfil.php?ok=excluir&id=<?php echo $row["id"]; ?>'" />
                                </center>
                                </div>                            
                            </div>
<?php } ?>
                        </form>
                    </div>              
                </div><!--/tab-pane-->
            </div><!--/col-9-->
        </div><!--/row-->   
    </div>
</body>

  <footer class="">
    <?php include("footer.php"); ?>
  </footer>

</html>