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
                if ($_POST['ok'] == 'true' && $_POST['processo'] == 'altInfo'){
                    $usuario->alterar($_POST['nome'], $_POST["username"], $_POST["senha"], $_POST["dtNascimento"], $_POST["genero"], $_POST['telefone'], $_POST["email"],  $_SESSION['id_usurio'] );
                    echo '<script>alert("Informações Alteradas com sucesso!");</script>'; 
                    echo '<script>window.location="../view/userPerfil.php";</script>'; 
                }else if ($_POST['ok'] == 'true' && $_POST['processo'] == 'altImg'){                    
                    $foto = $_FILES["foto"];	                    
                    if (!empty($foto["name"])) {
                        $largura = 960;
                        $altura = 960;
                        $tamanho = 2097152;
    
                        $error = array();
                
                        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
                        $error[1] = "Isso não é uma imagem.";
                        } 
                    
                        $dimensoes = getimagesize($foto["tmp_name"]);
                    
                        if($dimensoes[0] > $largura) {
                            $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
                        }
                
                        if($dimensoes[1] > $altura) {
                            $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
                        }
                        
                        if($foto["size"] > $tamanho) {
                            $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
                        }
                        if($dimensoes[0] <> $dimensoes[1]) {
                            $error[5] = "Altura e Largura da imagem devem ser iguais";
                        }
                
                        if (count($error) == 0) {
                        
                            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
                
                            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
                
                            $caminho_imagem = "../view/img/" . $nome_imagem;
                
                            move_uploaded_file($foto["tmp_name"], $caminho_imagem);
    
                            $usuario->alterarImagem($nome_imagem,  $_SESSION['id_usurio'] );
                            echo '<script>alert("Imagem Alterada com sucesso!");</script>'; 
                            echo '<script>window.location="../view/userPerfil.php";</script>'; 
                        }

                        if (count($error) != 0) {
                            foreach ($error as $erro) {
                                echo $erro . "<br />";
                            }
                        }
                    }
                }
            } else  if (isset($_GET['ok'])) {
                if ($_GET['ok'] == "excluir") {
                    $usuario->excluir($_GET['id']);
                    echo '<script>alert("Excluido com sucesso!");</script>';
                    echo '<script>window.location="../controller/logout.php";</script>'; 
                }                
            }
            break;
    }
}