<?php
 
require_once("../model/Agenda.php"); 

function Processo($Processo) {
 
    switch ($Processo) {
 
        case 'incluir':
 
            global $linha; 
            global $rs;
 
            $agenda = new Agenda();
 
            $agenda->listar("select * from agenda"); 
            $linha = $agenda->Linha;
            $rs = $agenda->Result;
 
            if (isset($_POST['ok'])) {
                if ($_POST['ok'] == 'true'){
                    $agenda->cadastrar($_POST['titulo'], $_POST["data"], $_POST["hora"], $_POST["descricao"], $_POST["local"], $_POST["id_users"]);
                    echo '<script>alert("Agendado com sucesso !");</script>';
                    echo '<script>window.location="../index.php";</script>';
                }
            }
 
        break;
        
        case 'listar':
 
            global $linha; 
            global $rs;
 
            $agenda = new Agenda();
 
            $agenda->listar("select * from agenda"); 
            $linha = $agenda->Linha;
            $rs = $agenda->Result;
 
            if (isset($_POST['ok'])) {
                if ($_POST['ok'] == 'true'){
                    $agenda->listar($_POST['titulo'], $_POST["data"], $_POST["hora"], $_POST["descricao"], $_POST["local"], $_POST["idagenda"]);
                    echo '<script>alert("Sua Agenda");</script>';
                    echo '<script>window.location="../index.php";</script>';
                }
            }
 
        break;

        case 'alterar':
 
            global $linha; 
            global $rs;

            $agenda = new Agenda();
            $agenda->listar("select * from agenda where idagenda=" .  $_SESSION['idagenda']);
            $linha = $agenda->Linha;
            $rs = $agenda->Result;

            if (isset($_POST['ok'])) {
                if ($_POST['ok'] == 'true'){
                    $agenda->alterar($_POST['titulo'], $_POST["data"], $_POST["hora"], $_POST["descricao"], $_POST["local"], $_POST["idagenda"]);
                    echo '<script>alert("Alterado com sucesso !");</script>'; 
                    echo '<script>window.location="../index.php";</script>'; 
                }
            }
        break;

        case 'excluir':
 
            global $linha; 
            global $rs;

            $agenda = new Agenda();
            $agenda->listar("select * from agenda where idagenda=" .  $_SESSION['idagenda']);
            $linha = $agenda->Linha;
            $rs = $agenda->Result;

            if (isset($_POST['ok'])) {
                if ($_POST['ok'] == 'true'){
                    $agenda->alterar($_POST['idagenda']);
                    echo '<script>alert("Excluido com sucesso !");</script>'; 
                    echo '<script>window.location="../index.php";</script>'; 
                }
            }
 
        break;
    }
}