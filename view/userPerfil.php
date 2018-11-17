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
    <title>Profile - <?php echo $_SESSION['nome'] ?></title>
    <script src="js/Validar.js"></script>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php include("bootstrap.php"); ?>
</head>
<body>
    <header>
        <?php include("menu.php"); ?>
    <header>
<?php while ($row = mysqli_fetch_array($run_user)) { ?>      
    <div class="text-center">
        <center>
            <img src="../view/img/<?php echo $row['foto']; ?>" class="avatar img-circle img-thumbnail" alt="avatar">
            <h6>Alterar Foto</h6>
            <input type="file" class="text-center center-block file-upload">
        </center>
    </div>
    
    <div class="container bootstrap snippet">        
        <div class="row">
            <div class="col-sm-2">           
            </div>
            <div class="col-sm-10">            
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
                                    <label><h4>Username</h4></label>
                                    <input type="text" class="form-control" name="username" value= '<?php echo $row['username']; ?>'>
                                </div>
                            </div>          
                            <div class="form-group">                          
                                <div class="col-xs-6">
                                    <label><h4>Data de Nasciemtno</h4></label>
                                    <input type="date" class="form-control" name="dtNascimento" value= '<?php echo date('Y-m-d', strtotime($row['data_nascimento'])); ?>'>
                                </div>
                            </div> 
                            <div class="form-group">                          
                                <div class="col-xs-6">
                                    <label><h4>Email</h4></label>
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
                                    <br>
                                    <input type="button" class="btn btn-lg btn-success" name="button" id="button" value="Alterar" onclick="validar(document.editform);"/>
                                    <input type="hidden" name="ok" id="ok" />
                                    <input class="btn btn-lg btn-danger" type="button" value=" Excluir Perfil" onclick="javascript: if (confirm('Você realmente deseja excluir esta mensagem?'))location.href='userPerfil.php?ok=excluir&id=<?php echo $row["id"]; ?>'" />
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
</html>