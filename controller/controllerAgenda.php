<?php
 
require_once("../model/Agenda.php"); 

function Processo($Processo) {
 
    switch ($Processo) {
 
        case 'incluir':
 
            global $linhaAgenda; 
            global $rsAgenda;
 
            $agenda = new Agenda();
 
            $agenda->listar("select * from agenda"); 
            $linhaAgenda = $agenda->Linha;
            $rsAgenda = $agenda->Result;
 
            if (isset($_POST['ok'])) {
                if ($_POST['ok'] == 'true'){
                    $agenda->cadastrar($_POST['titulo'], $_POST["data"], $_POST["hora"], $_POST["descricao"], $_POST["local"], $_SESSION['id_usurio']);
                    echo '<script>alert("Agendado com sucesso !");</script>';
                    echo '<script>window.location="../view/homepage.php";</script>';
                }
            }
 
        break;
        
        case 'listar':
 
            global $linhaAgenda; 
            global $rsAgenda;
 
            $agenda = new Agenda();
 
            $agenda->listar("select * from agenda"); 
            $linhaAgenda = $agenda->Linha;
            $rsAgenda = $agenda->Result;
 
            if (isset($_POST['ok'])) {
                if ($_POST['ok'] == 'true'){
                    $agenda->listar($_POST['titulo'], $_POST["data"], $_POST["hora"], $_POST["descricao"], $_POST["local"], $_POST["idagenda"]);
                    echo '<script>alert("Sua Agenda");</script>';
                    echo '<script>window.location="../view/homepage.php";</script>';
                }
            }
 
        break;

        case 'alterar':
 
            global $linhaAgenda; 
            global $rsAgenda;

            $agenda = new Agenda();
            $agenda->listar("select * from agenda where idagenda=" .  $_SESSION['idagenda']);
            $linhaAgenda = $agenda->Linha;
            $rsAgenda = $agenda->Result;

            if (isset($_POST['ok'])) {
                if ($_POST['ok'] == 'true'){
                    $agenda->alterar($_POST['titulo'], $_POST["data"], $_POST["hora"], $_POST["descricao"], $_POST["local"], $_POST["idagenda"]);
                    echo '<script>alert("Alterado com sucesso !");</script>'; 
                    echo '<script>window.location="../view/homepage.php";</script>'; 
                }
            }
        break;

        case 'excluir':
 
            global $linhaAgenda; 
            global $rsAgenda;

            $agenda = new Agenda();
            $agenda->listar("select * from agenda where idagenda=" .  $_SESSION['idagenda']);
            $linhaAgenda = $agenda->Linha;
            $rsAgenda = $agenda->Result;

            if (isset($_POST['ok'])) {
                if ($_POST['ok'] == 'true'){
                    $agenda->alterar($_POST['idagenda']);
                    echo '<script>alert("Excluido com sucesso !");</script>'; 
                    echo '<script>window.location="../view/homepage.php";</script>'; 
                }
            }
 
        break;

        case 'incluirFile':
 
            global $linhaAgenda; 
            global $rsAgenda;
 
            $agenda = new Agenda();
 
            $agenda->listar("select * from agenda"); 
            $linhaAgenda = $agenda->Linha;
            $rsAgenda = $agenda->Result;
 
            if (isset($_POST['ok'])) {
                if ($_POST['ok'] == 'true'){
                    if ($_FILES["arq1"]) {
                        $status = move_uploaded_file(  // Se erro retorna FALSE.
                            $_FILES["arq1"]["tmp_name"], // ArquivoOrigem
                            "../arquivoCSV/".$_FILES["arq1"]["name"]); // ArquivoDestino
                        
                           
                        if ($status) {
                            $a = fopen("../arquivoCSV/".$_FILES["arq1"]["name"],"r");
                             
                            if ($a) {
                                $lin = fgetcsv($a,100,";"); 
                                $lin = fgetcsv($a,100,";");                             
                                
                                while($lin!=null) {
                                    $tt = $lin[0];                                    
                                    $dt = $lin[1];
                                    $hr = $lin[2];
                                    $desc = $lin[3];
                                    $lc = $lin[4];
                                    

                                    $agenda->cadastrar($tt, $dt, $hr, $desc, $lc, $_SESSION['id_usurio']);
                                    
                                    $lin = fgetcsv($a,100,";");
                                    
                                }
                                fclose($a);
                                echo '<script>alert("Adicionado com sucesso !");</script>'; 
                                echo '<script>window.location="../view/homepage.php";</script>';                                
                            }
                            
                        }
                    }  
                    
                }
            }
 
        break;
    }
}