<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'agendadb';

$cadastro = array();

$connection = new mysqli($hostname, $username, $password);
mysqli_select_db($connection, $db);

$username = mysqli_real_escape_string($connection, $_POST['username']);
$senha = mysqli_real_escape_string($connection, $_POST['senha']);

$select_user = "SELECT * FROM users WHERE username='$username' AND senha='$senha'";
$run_user = mysqli_query($connection, $select_user);

$cadastro = @mysqli_fetch_array($run_user);
$check_user = mysqli_num_rows($run_user);

if ($check_user == 1){
    session_start();
    $_SESSION['id_usurio'] = $cadastro['id'];
    $_SESSION['nome'] = $cadastro['nome'];
    $_SESSION['username'] = $cadastro['username'];
    $_SESSION['senha'] = $cadastro['senha'];
    $_SESSION['sexo'] = $cadastro['sexo'];
    $_SESSION['data_nascimento'] = $cadastro['data_nascimento'];
    $_SESSION['email'] = $cadastro['email'];

    echo '<script>window.location="../view/listarevento.php";</script>';
} else {

    // falhou o login 
    echo '<script>alert("Email ou Senha Invalido!");</script>';
    echo '<script>window.location="../view/login.php";</script>';
}
?>