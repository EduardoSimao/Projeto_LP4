<?php

require_once('Conexao.php');

class Usuario {

    Private $nome;
	Private $username;
	Private $senha;
	Private $data_nascimento;
    Private $genero;
    Private $telefone;
    Private $email;
    Private $foto;
    
    public function incluir($nome, $username, $senha, $data_nascimento, $genero) { 

        $insert = "Insert into users(nome, username, senha, data_nascimento, sexo, foto) values ('$nome', '$username', '$senha', '$data_nascimento', '$genero', 'avatar_2x.png')";
			
        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);
    }

    
    public function consultar($sql) {

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($sql);

        $this->Linha = @mysqli_affected_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }
    
    public function alterar($nome, $username, $data_nascimento, $genero, $telefone, $email, $id) {

        $update = 'update users set nome="' . $nome . '", username="' . $username . '", data_nascimento="' . $data_nascimento . '", sexo="' . $genero . '", telefone="' . $telefone . '", email="' . $email . '" where id="' . $id . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        $this->Linha = mysqli_num_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }

    public function excluir($id) {

        $delete = 'delete from users where id="' . $id . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($delete);
    }
    public function alterarImagem($nome_imagem, $id) {

        $update = 'update users set foto="' . $nome_imagem . '" where id="' . $id . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        $this->Linha = mysqli_num_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }

}