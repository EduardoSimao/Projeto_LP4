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
        
    }
}