
<?php
session_start();
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
    <title></title>
    <script src="js/Validar.js"></script>
</head>
<body>
    <form action="" name="editform" method="POST">
    <?php while ($row = mysqli_fetch_array($run_user)) { ?>
        <label>Nome: </label><input type="text" name="nome" value= '<?php echo $row['nome']; ?>'><br>
        <label>Username: </label><input type="text" name="username"value= '<?php echo $row['username']; ?>'><br>
        <label>Data de Nascimento: </label><input type="date" name="dtNascimento" value= '<?php echo date('Y-m-d', strtotime($row['data_nascimento'])); ?>'><br>
        <input type="radio" name="genero" value="homem" <?php echo checked($row['sexo'], 'h' ); ?>> Homem
        <input type="radio" name="genero" value="mulher" <?php echo checked($row['sexo'], 'm' ); ?>> Mulher
        <input type="radio" name="genero" value="outros" <?php echo checked($row['sexo'], 'o' ); ?>> Outro
        <br>
    <?php } ?>
        <input type="button" name="button" id="button" value="Alterar" onclick="validar(document.editform);"/>
        <input type="hidden" name="ok" id="ok" />
    
    </form>

</body>

</html>

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
                                <label>Nome</label>
                                <input type="text" placeholder="Insira seu nome" class="form-control" name='nome'>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Username</label>
                                <input type="text" placeholder="Insira seu Username" class="form-control" name='username'>
                            </div>
                        </div>					
                        <div class="form-group">
                        <div class="col-sm-6 form-group">
                                <label>Senha</label>
                                <input type="password" placeholder="Insira sua Senha" class="form-control" name='senha'>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Confirmar Senha</label>
                                <input type="password" placeholder="Confirme sua Senha" class="form-control" name='confSenha'>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Data de Nascimento</label>
                                <input type="date" placeholder="Usuario" class="form-control" name='dtNascimento'>
                            </div>
                            <div class="col-sm-6 form-group">
                                 <label>Gênero</label><br>
                                <input type="radio" name="genero" value="homem"> Homem
                                <input type="radio" name="genero" value="mulher"> Mulher
                                <input type="radio" name="genero" value="outros"> Outro
                            </div>
                        </div>	
                        <button type="button" class="btn btn-block btn-info" onclick="validar(document.form);">Cadastrar</button> 					
                        <input type="hidden" name="ok" id="ok" />           
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