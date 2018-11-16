<!DOCTYPE html>

<?php
require_once('../controller/controllerUsuario.php');
Processo('incluir');

?>
<html>
<head>
    <title></title>
    <script src="js/Validar.js"></script>
</head>
<body>
    <h1>Cadastro de Usuário</h1><br>

    <div>
    <form action="" name="form" method="POST">
        <label>Nome: </label><input type="text" name="nome"><br>
        <label>Username: </label><input type="text" name="username"><br>
        <label>Senha: </label><input type="password" name="senha"><br>
        <label>Confirmar Senha:: </label><input type="password" name="confSenha"><br>
        <label>Data de Nascimento: </label><input type="date" name="dtNascimento"><br>
        <input type="radio" name="genero" value="homem"> Homem
        <input type="radio" name="genero" value="mulher"> Mulher
        <input type="radio" name="genero" value="outros"> Outro
        <br>
        <input type="button" name="button" id="button" value="Cadastrar" onclick="validar(document.form);"/>
        <input type="hidden" name="ok" id="ok" />
    </form>
    </div>
</body>
</html>
