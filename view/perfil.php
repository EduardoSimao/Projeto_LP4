
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