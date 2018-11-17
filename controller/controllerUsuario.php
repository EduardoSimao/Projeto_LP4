<?php
 
require_once("../model/Usuario.php"); 

function Processo($Processo) {
 
    switch ($Processo) {
 
        case 'incluir':
 
            global $linha; 
            global $rs;
 
            $usuario = new Usuario();
 
            $usuario->consultar("select * from users"); 
            $linha = $usuario->Linha;
            $rs = $usuario->Result;
 
            if (isset($_POST['ok'])) {
                if ($_POST['ok'] == 'true'){
                    $usuario->incluir($_POST['nome'], $_POST["username"], $_POST["senha"], $_POST["dtNascimento"], $_POST["genero"]);
                    echo '<script>alert("Cadastrado com sucesso !");</script>';
                    echo '<script>window.location="../index.php";</script>';
                }
            }
 
            break;
        case 'editar':

            global $linha; 
            global $rs;

            $usuario = new Usuario();
            $usuario->consultar("select * from user where id=" .  $_SESSION['id_usurio']);
            $linha = $usuario->Linha;
            $rs = $usuario->Result;

            if (isset($_POST['ok'])) {
                if ($_POST['ok'] == 'true'){
                    $usuario->alterar($_POST['nome'], $_POST["username"], $_POST["senha"], $_POST["dtNascimento"], $_POST["genero"], $_POST['telefone'], $_POST["email"],  $_SESSION['id_usurio'] );
                    echo '<script>alert("Alterado com sucesso !");</script>'; 
                    echo '<script>window.location="../view/userPerfil.php";</script>'; 
                }
            } else  if (isset($_GET['ok'])) {
                if ($_GET['ok'] == "excluir") {
                    $usuario->excluir($_GET['id']);
                    echo '<script>alert("Excluido com sucesso !");</script>';
                    echo '<script>window.location="../controller/logout.php";</script>'; 
                }
            }
            break;
    }
}